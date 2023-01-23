<?php
        namespace App\Http\Controllers\Work;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Work\Workprojects;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class WorkprojectsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Workprojects::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.work.workprojects.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.work.workprojects.ajax_index", compact('data'));
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
                $request->request->add(['alias' => slugify($request->workprojectsName)]);
                Workprojects::create($request->all());
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
                $data = Workprojects::findOrFail($id);
                $request->request->add(['alias' => slugify($request->workprojectsName)]);
                $data->update($request->all());
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
        