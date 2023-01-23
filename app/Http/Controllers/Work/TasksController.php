<?php
        namespace App\Http\Controllers\Work;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Work\Tasks;
        use Illuminate\Support\Facades\DB;
        class TasksController extends Controller
        {
           public function index(Request $request)
            {
                $data = Tasks::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.create");
            }

            public function store(Request $request)
            {
                Tasks::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('work.tasks.index')->with('success','The Tasks created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Tasks::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Tasks::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.work.tasks.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.tasks.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Tasks::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
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

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Tasks::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.work.tasks.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Tasks::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Tasks::findOrFail($id);
                            $html = view("omis.ajax.work.tasks.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Tasks::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Tasks::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        