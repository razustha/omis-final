<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Module;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ModuleController extends Controller
        {
           public function index(Request $request)
            {
                $data = Module::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.module.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.module.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.module.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.module.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->moduleName)]);
                Module::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Module Created Successfully.'], 200);
                }
                return redirect()->route('master.module.index')->with('success','The Module created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Module::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.module.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.module.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Module::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.module.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.module.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Module::findOrFail($id);
                $request->request->add(['alias' => slugify($request->moduleName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Module updated Successfully.'], 200);
                }
                return redirect()->route('master.module.index')->with('success','The Module updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Module::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Module Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Module::where('status', '<>', -1)->get();
                        return view("omis.master.module.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.module.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Module::findOrFail($id);
                        return view("omis.master.module.ajax.edit", compact('data'))->render();
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
                            $data = Module::where('status', '<>', -1)->get();
                            $html = view("omis.master.module.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Module::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Module Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Module::findOrFail($id);
                            $html = view("omis.master.module.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Module::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Module updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Module::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Module Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        