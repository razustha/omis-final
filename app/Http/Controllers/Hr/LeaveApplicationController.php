<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use App\Models\Hr\Employee;
        use Illuminate\Http\Request;
        use App\Models\Hr\Leaveapplication;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;
        use App\Mail\CommonMail;
        use Exception;
        use Illuminate\Support\Facades\Log;
        use Illuminate\Support\Facades\Mail;
        use App\Models\User;

        



        class LeaveapplicationController extends Controller
        {
           public function index(Request $request)
            {
                if(auth()->user()->hasRole('hr'))
                {
                    $data = Leaveapplication::orderBy('created_at','desc')->where('leaveApplication_status','forwarded')->get();
                } else {
                    $data = Leaveapplication::orderBy('created_at','desc')->get();
                }


                if ($request->ajax()) {
                    $html = view("omis.hr.leaveapplication.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.leaveapplication.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.leaveapplication.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.leaveapplication.create");
            }

            public function store(Request $request)
            {
                
                $employee = Employee::findOrFail($request->employee_id);
                // dd(!empty($employee->emailAddress));
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
             
                $leaveApplication=Leaveapplication::create($request->all());
             
                
            //    start
      
                if (!empty($employee->emailAddress)) {
                    try {
                        $mail_data = [
                            'name' => $employee->full_name,
                            'subject' => 'Leave Application',
                            'message' => 'Leave Application Result:',
                            'leaveStart'=>$request->leaveStart,
                            'leaveEnd'=>$request->leaveEnd,
                            'leaveType'=>$request->leaveType,
                            'manager_name'=>$employee->manager_name,
                            'remarks'=>$request->remarks,
                            'view' => 'omis.emails.leaveapplication'
                        ];
                        Mail::to($employee->emailAddress)->send(new CommonMail($mail_data, $employee));
                    } catch (Exception $e) {
                        Log::info($e->getMessage());
                        return $e->getMessage();
    
                    }
                }
                // end

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
