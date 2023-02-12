<?php
        namespace App\Http\Controllers\Work;
        use App\Http\Controllers\Controller;
use App\Models\Hr\Employee;
use App\Models\Work\ProjectEmployee;
use Illuminate\Http\Request;
        use App\Models\Work\Workprojects;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class WorkprojectsController extends Controller
        {
           public function index(Request $request)
            {
                if(auth()->user()->user_type != "EMPLOYEE")
                {
                    $data = Workprojects::where('status','<>',-1)->orderBy('created_at','desc')->get();

                    if ($request->ajax()) {
                        $html = view("omis.work.workprojects.ajax.index", compact('data'))->render();
                        return response()->json(['status' => true, 'content' => $html], 200);
                    }
                    return view("omis.work.workprojects.ajax_index", compact('data'));


                } else {
                    $data = ProjectEmployee::where('employee_id', auth()->user()->employee->employee_id)->get();
                    if ($request->ajax()) {
                        $html = view("employee.work.workprojects.ajax.index", compact('data'))->render();
                        return response()->json(['status' => true, 'content' => $html], 200);
                    }
                    return view("employee.work.workprojects.ajax_index", compact('data'));
                }

            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.work.workprojects.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.workprojects.create");
            }

            public function store(Request $request)
            {
// dd($request->all());
                $request->request->add(['alias' => slugify($request->workprojectsName)]);
                $project = Workprojects::create($request->except('employee_id'));
                foreach($request->employee_id as $employee)
                {
                    $data['employee_id'] = $employee;
                    $data['workProject_id'] = $project->workProject_id;
                    ProjectEmployee::create($data);
                }
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Workprojects Created Successfully.'], 200);
                }
                return redirect()->route('work.workprojects.index')->with('success','The Workprojects created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Workprojects::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.workprojects.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.workprojects.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Workprojects::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.workprojects.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.workprojects.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {

                $workproject = Workprojects::findOrFail($id);
                $projectEmployee = [];
                $data = $request->all();
                $FiredEmployee = ProjectEmployee::whereNotIn('employee_id',$data['employee_id'])->where('workProject_id', $id)->delete();
                foreach ($data['employee_id'] as  $key => $value)  {
                    $existingEmployee = ProjectEmployee::where('employee_id', $value)->where('workProject_id', $id)->first();
                    if(!$existingEmployee)
                    {
                        $files = [
                            'employee_id' => $value,
                            'workProject_id' => $id,
                        ];
                        ProjectEmployee::create($files);
                    }

                }
                $request->request->add(['alias' => slugify($request->workprojectsName)]);
                $request['department_id'] = $workproject->department_id;
                $workproject->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Workprojects updated Successfully.'], 200);
                }
                return redirect()->route('work.workprojects.index')->with('success','The Workprojects updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Workprojects::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Workprojects Deleted Successfully.'],200);
            }
            public function updateProjectStatus(Request $request)
            {
               
                $data = WorkProjects::findOrFail($request->workProject_id);
                $data->workProject_status = "completed";
                if($data->save()){
                    return response()->json(['status'=>true, 'message'=>'The Project has been completed Successfully']);
                } else {
                    return response()->json(['status'=>false]);
                }
            }

            public function getDepartmentEmployee(Request $request)
            {
                $department_id = $request->department_id;
                $data = Employee::where('organization_id', auth()->user()->userOrganization->organization_id)->where('department_id', $department_id)->orderBy('created_at', 'desc')->get();
                
                return response()->json(['status' => 200, 'message' => $data]);
            }

            public function destroyProjectEmployee(Request $request, $id)
            {
                $data = ProjectEmployee::findOrFail($id);
                $data->delete();
                return response()->json(['status'=>true,'message'=>'The Workprojects Deleted Successfully.'],200);

            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Workprojects::where('status', '<>', -1)->get();
                        return view("omis.work.workprojects.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.work.workprojects.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Workprojects::findOrFail($id);
                        return view("omis.work.workprojects.ajax.edit", compact('data'))->render();
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
                            $data = Workprojects::where('status', '<>', -1)->get();
                            $html = view("omis.work.workprojects.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Workprojects::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Workprojects Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Workprojects::findOrFail($id);
                            $html = view("omis.work.workprojects.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Workprojects::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Workprojects updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Workprojects::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Workprojects Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
