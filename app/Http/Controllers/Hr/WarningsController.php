<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Warnings;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class WarningsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Warnings::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.warnings.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.warnings.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.warnings.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.warnings.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'warningTo' => 'required',
                    'warningDate' => 'required',
                    'warningSubject' => 'required',
                    'warningDescription' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->warningsName)]);
                Warnings::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Warnings Created Successfully.'], 200);
                }
                return redirect()->route('hr.warnings.index')->with('success','The Warnings created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Warnings::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.warnings.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.warnings.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Warnings::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.warnings.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.warnings.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'warningTo' => 'required',
                    'warningDate' => 'required',
                    'warningSubject' => 'required',
                    'warningDescription' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }
                
                $data = Warnings::findOrFail($id);
                $request->request->add(['alias' => slugify($request->warningsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Warnings updated Successfully.'], 200);
                }
                return redirect()->route('hr.warnings.index')->with('success','The Warnings updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Warnings::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Warnings Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Warnings::where('status', '<>', -1)->get();
                        return view("omis.hr.warnings.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.warnings.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Warnings::findOrFail($id);
                        return view("omis.hr.warnings.ajax.edit", compact('data'))->render();
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
                            $data = Warnings::where('status', '<>', -1)->get();
                            $html = view("omis.hr.warnings.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Warnings::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Warnings Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Warnings::findOrFail($id);
                            $html = view("omis.hr.warnings.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Warnings::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Warnings updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Warnings::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Warnings Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        