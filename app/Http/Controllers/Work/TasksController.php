<?php
        namespace App\Http\Controllers\Work;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Work\Tasks;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TasksController extends Controller
        {
           public function index(Request $request)
            {
                $data = Tasks::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->tasksName)]);
                Tasks::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Tasks Created Successfully.'], 200);
                }
                return redirect()->route('work.tasks.index')->with('success','The Tasks created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Tasks::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Tasks::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Tasks::findOrFail($id);
                $request->request->add(['alias' => slugify($request->tasksName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Tasks updated Successfully.'], 200);
                }
                return redirect()->route('work.tasks.index')->with('success','The Tasks updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Tasks::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Tasks Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Tasks::where('status', '<>', -1)->get();
                        return view("omis.work.tasks.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.work.tasks.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Tasks::findOrFail($id);
                        return view("omis.work.tasks.ajax.edit", compact('data'))->render();
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
                            $data = Tasks::where('status', '<>', -1)->get();
                            $html = view("omis.work.tasks.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Tasks::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Tasks Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Tasks::findOrFail($id);
                            $html = view("omis.work.tasks.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Tasks::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Tasks updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Tasks::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Tasks Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        