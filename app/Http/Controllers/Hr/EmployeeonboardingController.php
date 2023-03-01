<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Employeeonboarding;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class EmployeeonboardingController extends Controller
        {
           public function index(Request $request)
            {
                $data = Employeeonboarding::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.employeeonboarding.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeeonboarding.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.employeeonboarding.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeeonboarding.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'department_id' => 'required|exists:tbl_department,department_id',
                    'employee_id' => 'required|exists:tbl_employee,employee_id',
                    'designation_id' => 'required|exists:tbl_designation,designation_id',
                    'workingShift' => 'required',
                    'workingHour' => 'required',
                    'workingMode' => 'required',
                    'joinDate' => 'required',
                    'dayFrom' => 'required',
                    'dayTo' => 'required',
                    'status' => 'required'
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->employeeonboardingName)]);
                Employeeonboarding::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Employeeonboarding Created Successfully.'], 200);
                }
                return redirect()->route('hr.employeeonboarding.index')->with('success','The Employeeonboarding created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Employeeonboarding::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.employeeonboarding.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeeonboarding.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Employeeonboarding::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.employeeonboarding.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeeonboarding.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'department_id' => 'required|exists:tbl_department,department_id',
                    'employee_id' => 'required|exists:tbl_employee,employee_id',
                    'designation_id' => 'required|exists:tbl_designation,designation_id',
                    'workingShift' => 'required',
                    'workingHour' => 'required',
                    'workingMode' => 'required',
                    'joinDate' => 'required',
                    'dayFrom' => 'required',
                    'dayTo' => 'required',
                    'status' => 'required'
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }
                $data = Employeeonboarding::findOrFail($id);
                $request->request->add(['alias' => slugify($request->employeeonboardingName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Employeeonboarding updated Successfully.'], 200);
                }
                return redirect()->route('hr.employeeonboarding.index')->with('success','The Employeeonboarding updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Employeeonboarding::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Employeeonboarding Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Employeeonboarding::where('status', '<>', -1)->get();
                        return view("omis.hr.employeeonboarding.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.employeeonboarding.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Employeeonboarding::findOrFail($id);
                        return view("omis.hr.employeeonboarding.ajax.edit", compact('data'))->render();
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
                            $data = Employeeonboarding::where('status', '<>', -1)->get();
                            $html = view("omis.hr.employeeonboarding.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Employeeonboarding::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Employeeonboarding Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Employeeonboarding::findOrFail($id);
                            $html = view("omis.hr.employeeonboarding.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Employeeonboarding::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Employeeonboarding updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Employeeonboarding::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Employeeonboarding Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        