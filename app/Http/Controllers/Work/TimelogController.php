<?php
        namespace App\Http\Controllers\Work;
        use App\Http\Controllers\Controller;
use App\Models\Work\Tasks;
use Illuminate\Http\Request;
        use App\Models\Work\Timelog;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TimelogController extends Controller
        {
           public function index(Request $request)
            {
                if(auth()->user()->user_type != "EMPLOYEE") {
                    $data = Timelog::where('status','<>',-1)->orderBy('created_at','desc')->get();
                    if ($request->ajax()) {
                        $html = view("omis.work.timelog.ajax.index", compact('data'))->render();
                        return response()->json(['status' => true, 'content' => $html], 200);
                    }
                    return view("omis.work.timelog.ajax_index", compact('data'));

                } else {
                    $data = Timelog::where('status','<>',-1)->where('employee_id', auth()->user()->employee->employee_id)->where('tasks_endTime','!=',null)->orderBy('created_at','desc')->get();
                    if ($request->ajax()) {
                        $html = view("employee.work.timelog.ajax.index", compact('data'))->render();
                        return response()->json(['status' => true, 'content' => $html], 200);
                    }
                    return view("employee.work.timelog.ajax_index", compact('data'));
                }

            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.work.timelog.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.timelog.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->timelogName)]);
                Timelog::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Timelog Created Successfully.'], 200);
                }
                return redirect()->route('work.timelog.index')->with('success','The Timelog created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Timelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.timelog.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.timelog.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Timelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.timelog.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.timelog.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Timelog::findOrFail($id);
                $request->request->add(['alias' => slugify($request->timelogName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Timelog updated Successfully.'], 200);
                }
                return redirect()->route('work.timelog.index')->with('success','The Timelog updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Timelog::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Timelog Deleted Successfully.'],200);
            }

            public function startTimeLog(Request $request)
            {
                $tasks = Tasks::findOrFail($request->tasks_id);
                $data['workProject_id'] = $tasks->workProject_id;
                $data['tasks_id'] = $tasks->tasks_id;
                $data['employee_id'] = auth()->user()->employee->employee_id;
                $data['tasks_logDate'] = date('Y-m-d');
                $data['tasks_startTime'] = date('H:i:s');
                if(Timelog::create($data)){
                    return response()->json(['status'=>true, 'message'=>'The Timelog Added Successfully']);
                } else {
                    return response()->json(['status'=>false]);
                }



            }

            public function stopTimeLog(Request $request)
            {
                $data = Timelog::findOrFail($request->timelog_id);
                $data->tasks_endTime = date('H:i:s');
                if($data->save()){
                    return response()->json(['status'=>true, 'message'=>'The Timelog Updated Successfully']);
                } else {
                    return response()->json(['status'=>false]);
                }
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Timelog::where('status', '<>', -1)->get();
                        return view("omis.work.timelog.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.work.timelog.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Timelog::findOrFail($id);
                        return view("omis.work.timelog.ajax.edit", compact('data'))->render();
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
                            $data = Timelog::where('status', '<>', -1)->get();
                            $html = view("omis.work.timelog.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Timelog::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Timelog Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Timelog::findOrFail($id);
                            $html = view("omis.work.timelog.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Timelog::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Timelog updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Timelog::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Timelog Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
