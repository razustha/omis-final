<?php
        namespace App\Http\Controllers\Work;
        use App\Http\Controllers\Controller;
use App\Models\Hr\Employee;
use App\Models\Work\ProjectEmployee;
use Illuminate\Http\Request;
        use App\Models\Work\WorkProjects;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class WorkProjectsController extends Controller
        {
           public function index(Request $request)
            {
                if(auth()->user()->user_type != "EMPLOYEE")
                {
                    $data = WorkProjects::where('status','<>',-1)->orderBy('created_at','desc')->get();

                    if ($request->ajax()) {
                        $html = view("omis.work.WorkProjects.ajax.index", compact('data'))->render();
                        return response()->json(['status' => true, 'content' => $html], 200);
                    }
                    return view("omis.work.WorkProjects.ajax_index", compact('data'));


                } else {
                    $data = ProjectEmployee::where('employee_id', auth()->user()->employee->employee_id)->get();
                    if ($request->ajax()) {
                        $html = view("employee.work.workProjects.ajax.index", compact('data'))->render();
                        return response()->json(['status' => true, 'content' => $html], 200);
                    }
                    return view("employee.work.workProjects.ajax_index", compact('data'));
                }

            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.work.WorkProjects.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.WorkProjects.create");
            }

            public function store(Request $request)
            {
// dd($request->all());
                $request->request->add(['alias' => slugify($request->WorkProjectsName)]);
                $project = WorkProjects::create($request->except('employee_id'));
                foreach($request->employee_id as $employee)
                {
                    $data['employee_id'] = $employee;
                    $data['workProject_id'] = $project->workProject_id;
                    ProjectEmployee::create($data);
                }
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The WorkProjects Created Successfully.'], 200);
                }
                return redirect()->route('work.WorkProjects.index')->with('success','The WorkProjects created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = WorkProjects::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.WorkProjects.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.WorkProjects.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = WorkProjects::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.WorkProjects.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.WorkProjects.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {

                $workproject = WorkProjects::findOrFail($id);
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
                $request->request->add(['alias' => slugify($request->WorkProjectsName)]);
                $request['department_id'] = $workproject->department_id;
                $workproject->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The WorkProjects updated Successfully.'], 200);
                }
                return redirect()->route('work.WorkProjects.index')->with('success','The WorkProjects updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = WorkProjects::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The WorkProjects Deleted Successfully.'],200);
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
                return response()->json(['status'=>true,'message'=>'The WorkProjects Deleted Successfully.'],200);

            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = WorkProjects::where('status', '<>', -1)->get();
                        return view("omis.work.WorkProjects.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.work.WorkProjects.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = WorkProjects::findOrFail($id);
                        return view("omis.work.WorkProjects.ajax.edit", compact('data'))->render();
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
                            $data = WorkProjects::where('status', '<>', -1)->get();
                            $html = view("omis.work.WorkProjects.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            WorkProjects::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The WorkProjects Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = WorkProjects::findOrFail($id);
                            $html = view("omis.work.WorkProjects.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = WorkProjects::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The WorkProjects updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = WorkProjects::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The WorkProjects Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }

        }
