<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use App\Models\Hr\Employee;
        use Illuminate\Http\Request;
        use App\Models\Hr\Leaveapplication;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;
        use App\Mail\CommonMail;
use App\Models\Hr\Mangeholiday;
use App\Models\Master\Leavetype;
use App\Models\Master\PaidLeave;
use Exception;
        use Illuminate\Support\Facades\Log;
        use Illuminate\Support\Facades\Mail;
        use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use DateInterval;
use DatePeriod;
use DateTime;

        class LeaveapplicationController extends Controller
        {
            public function calculateRemainingPaidLeave($employeeId)
            {
                $employeeData = Employee::where('employee_id', auth()->user()->employee->employee_id)->first();
                $currentDate = Carbon::now()->format('Y-m-d');
                $employeeJoinFrom = Carbon::parse($employeeData->joiningDate)->format('Y-m-d');

                $remainingPaidLeaveDays = 0;
                $extraPaidLeaveTaken = 0;
                $totalLeaveDays = 0;
                //paid leave allocated per month
                $paidLeaveAllocation = PaidLeave::where('organization_id', $employeeData->organization_id)->first()->paidLeave ?? 0;
                if ($paidLeaveAllocation != 0) {
                    $period = CarbonPeriod::create($employeeJoinFrom, '1 month', $currentDate);
                    //calculating total paid leave earned
                    //getting total days he joined the company till current date
                    $employeeJoinedDaysTillCurrent = Carbon::parse($employeeJoinFrom)->diffInDays($currentDate);

                    $totalMonthsStayed = intval($employeeJoinedDaysTillCurrent / 30);

                    $totalPaidLeaveAccumulated = $totalMonthsStayed * intval($paidLeaveAllocation);
                    //end of calculating total paid leave earned
                    $leaveRequestApproved = Leaveapplication::where([
                        ['employee_id', $employeeData->employee_id], ['leaveApplication_status', 'Approved'], ['leavetype_id', 0]
                    ])->whereDate('created_at', '>=', $employeeJoinFrom)->get();

                    foreach ($leaveRequestApproved as $data) {
                        if ($data->leaveStart == $data->leaveEnd) {
                            if($data->type == "half")
                            {
                                $leaveDays = 0.5;
                            } else {
                                $leaveDays = 1;
                            }
                        } else {
                            $leaveDays = Carbon::parse($data->startDate)->diffInDays($data->leaveEnd) + 1;
                            if($data->type == "half")
                            {
                                $leaveDays = $leaveDays/2;
                            } else {
                                $leaveDays = $leaveDays;
                            }
                        }
                        $totalLeaveDays += $leaveDays;
                    }
                    $remainingPaidLeaveDays = $totalPaidLeaveAccumulated - $totalLeaveDays;
                    if ($remainingPaidLeaveDays < 0) {
                        $extraPaidLeaveTaken = abs($remainingPaidLeaveDays);
                        $remainingPaidLeaveDays = 0;
                    } else {
                        $extraPaidLeaveTaken = 0;
                    }
                }
                return [$paidLeaveAllocation, $remainingPaidLeaveDays, $extraPaidLeaveTaken, $totalLeaveDays];
            }
            public function leaveTakenDays($leavetype_id, $employeeId)
            {
                if ($leavetype_id == 0) {
                    //then its paid leave
                    $totalDays = $this->calculateRemainingPaidLeave($employeeId)[1];
                } else {
                    $leaveRequests = Leaveapplication::where([
                        ['leavetype_id', $leavetype_id], ['employee_id', $employeeId], ['leaveApplication_status', 'Approved']
                    ])->get();
                    $totalDays = 0;
                    foreach ($leaveRequests as $data) {
                        $leaveDays = Carbon::parse($data->leaveStart)->diffInDays($data->leaveEnd) + 1;
                        if($data->type == "half")
                        {
                            $leaveDays = $leaveDays/2;
                        } else {
                            $leaveDays = $leaveDays;
                        }
                        $totalDays += $leaveDays;
                    }
                }
                return $totalDays;
            }

            public function calculateTotalLeaveDays($leaveStart, $leaveEnd, $type)
            {
                $startdate = new DateTime($leaveStart);
                $enddate = new DateTime($leaveEnd);
                $enddate->modify('+1 day');
                $interval = $enddate->diff($startdate);

                $days = $interval->days;
                // dd($startdate,$enddate);

                $period = new DatePeriod($startdate, new DateInterval('P1D'), $enddate);

                $holidays = Mangeholiday::all();
                if(isset($holidays)) {
                    foreach($holidays as $holidaydata) {
                        $end_holidayDate = new DateTime($holidaydata->endDate);
                        $end_holidayDate->modify('+1 day');
                        $holiday = new DatePeriod(
                            new DateTime($holidaydata->startDate),
                            new DateInterval('P1D'),
                            $end_holidayDate
                       );
                    }
                    if(isset($holiday))
                    {
                        foreach ($holiday as $key => $value) {
                            //$value->format('Y-m-d')

                            $allholiday[$key] = $value->format('Y-m-d');
                        }
                    }


                }


                foreach($period as $dt) {
                    $curr = $dt->format('D');

                    // if ($curr == 'Sat' || $curr == 'Sun') {
                    // substract if Saturday or Sunday
                    if ($curr == 'Sat') {
                        $days--;
                    }

                    elseif (isset($holiday) && in_array($dt->format('Y-m-d'), $allholiday)) {
                        $days--;
                    }

                }

                if($type == "half") {
                    $days = $days/2;
                } else {
                    $days = $days;
                }
                return $days;
            }
           public function index(Request $request)
            {
                if(auth()->user()->hasRole('hr'))
                {
                    $data = Leaveapplication::orderBy('created_at','desc')->where('leaveApplication_status','forwarded')->get();
                } elseif(auth()->user()->hasRole('super-super-admin','super-admin')) {
                    $data = Leaveapplication::orderBy('created_at','desc')->get();
                } elseif(auth()->user()->employee->is_head == "manager") {
                    $data = Leaveapplication::orderBy('created_at','desc')->get();

                } else {
                    $data = Leaveapplication::orderBy('created_at','desc')->where('employee_id', auth()->user()->employee->employee_id)->get();

                }


                if ($request->ajax()) {
                    $html = view("omis.hr.leaveapplication.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.leaveapplication.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                $employeeId = auth()->user()->employee->employee_id;
                $employeeData = Employee::where('employee_id', $employeeId)->first();
                $organizationId = $employeeData->organization_id;
                $leaveData = Leavetype::where('organization_id', $organizationId)->get();
                $leaves = [];
                foreach ($leaveData as $key => $data) {
                    $leaves[$key]['leavetype_id'] = $data->leavetype_id;
                    $leaves[$key]['leaveType'] = $data->leaveType;
                    $leaveTaken = $this->leaveTakenDays($data->leavetype_id, $employeeId);
                    $leavesRemaining = $data->leaveCount - $leaveTaken;
                    if ($leavesRemaining > 0) {
                        $leaves[$key]['remainingLeave'] = $data->leaveCount - $leaveTaken;
                    } else {
                        $leaves[$key]['remainingLeave'] = 0;
                    }
                }
                //remaining Paid Leave
                $remainingPaidLeave = $this->leaveTakenDays(0, $employeeId);

                if ($request->ajax()) {
                    $html = view("omis.hr.leaveapplication.ajax.create",compact('remainingPaidLeave','leaves'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }

                return view("omis.hr.leaveapplication.create");
            }

            public function store(Request $request)
            {

                $employee = Employee::findOrFail($request->employee_id);
                // dd(!empty($employee->emailAddress));
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
                $employee_department = $employee->department_id;
                $department_head = Employee::where('department_id', $employee_department)->where('is_head','manager')->where('employee_id','!=',$employee->employee_id)->first();
                if($department_head == null)
                {
                    $request['leaveApplication_status'] = "forwarded";
                }
                // leave calculation

                $request['sub_total'] = $this->calculateTotalLeaveDays($request->leaveStart, $request->leaveEnd, $request->type);
                // dd($request->all());
                $leaveApplication=Leaveapplication::create($request->all());


            // //    start
            //     if (!env('APP_MODE')) {
            //         if (!empty($employee->emailAddress)) {
            //             try {
            //                 $mail_data = [
            //                     'name' => $employee->full_name,
            //                     'subject' => 'Leave Application',
            //                     'message' => 'Leave Application Result:',
            //                     'leaveStart'=>$request->leaveStart,
            //                     'leaveEnd'=>$request->leaveEnd,
            //                     'leavetype_id'=>$request->leavetype_id,
            //                     'manager_name'=>$employee->manager_name,
            //                     'remarks'=>$request->remarks,
            //                     'view' => 'omis.emails.leaveapplication'
            //                 ];
            //                 Mail::to($employee->emailAddress)->send(new CommonMail($mail_data, $employee));
            //             } catch (Exception $e) {
            //                 Log::info($e->getMessage());
            //                 return $e->getMessage();

            //             }
            //         }
            //     }
            //     // end

                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leaveapplication Created Successfully.'], 200);
                }
                return redirect()->route('hr.leaveapplication.index')->with('success','The Leaveapplication created Successfully.');

            }

            public function show(Request $request, $id)
            {
                $data = Leaveapplication::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.leaveapplication.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.leaveapplication.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Leaveapplication::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.leaveapplication.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.leaveapplication.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Leaveapplication::findOrFail($id);
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
                $request['sub_total'] = $this->calculateTotalLeaveDays($request->leaveStart, $request->leaveEnd, $request->type);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leaveapplication updated Successfully.'], 200);
                }
                return redirect()->route('hr.leaveapplication.index')->with('success','The Leaveapplication updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Leaveapplication::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Leaveapplication Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Leaveapplication::where('status', '<>', -1)->get();
                        return view("omis.hr.leaveapplication.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.leaveapplication.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Leaveapplication::findOrFail($id);
                        return view("omis.hr.leaveapplication.ajax.edit", compact('data'))->render();
                        break;
                    default:
                        return 'Not Found';
                }
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Leaveapplication::where('status', '<>', -1)->get();
                            $html = view("omis.hr.leaveapplication.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Leaveapplication::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Leaveapplication Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Leaveapplication::findOrFail($id);
                            $html = view("omis.hr.leaveapplication.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Leaveapplication::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Leaveapplication updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Leaveapplication::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Leaveapplication Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }

            public function toForward(Request $request) {

                $data = Leaveapplication::findOrFail($request->approved_id);
                $dat['leaveApprovalBy'] = auth()->user()->id;
                $dat['leaveApprovedDate'] = date('Y-m-d');
                $dat['leaveApplication_status'] = "forwarded";
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
                $data->update($dat);
                return redirect()->route('hr.leaveapplication.index')->with('success','The Leaveapplication has been approved.');

            }

            public function toApprove(Request $request) {

                $data = Leaveapplication::findOrFail($request->approved_id);
                $dat['leaveApprovalBy'] = auth()->user()->id;
                $dat['leaveApprovedDate'] = date('Y-m-d');
                $dat['leaveApplication_status'] = "approved";
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
                $data->update($dat);
                return redirect()->route('hr.leaveapplication.index')->with('success','The Leaveapplication has been approved.');

            }




            public function toReject(Request $request) {

                $data = Leaveapplication::findOrFail($request->rejected_id);
                $dat['leaveApprovalBy'] = auth()->user()->id;
                $dat['leaveApprovedDate'] = date('Y-m-d');
                $dat['leaveApplication_status'] = "rejected";
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
                $data->update($dat);
                return redirect()->route('hr.leaveapplication.index')->with('success','The Leaveapplication has been rejected.');

            }
        }
