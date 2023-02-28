<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Departmenttype;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class DepartmenttypeController extends Controller
        {
           public function index(Request $request)
            {
                $data = Departmenttype::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.departmenttype.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.departmenttype.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.departmenttype.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.departmenttype.create");
            }

            public function store(Request $request)
                            {
                                    $validator = Validator::make($request->all(), [
                            'departmentName' => 'required',
                               'designation' => 'required',
                                'status' => 'required',
                        ]);
                           if ($validator->fails()) {
                            return response()->json([
                                'error' => $validator->errors()->all(),
                            ]);
                        }
                $request->request->add(['alias' => slugify($request->departmenttypeName)]);
                Departmenttype::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Departmenttype Created Successfully.'], 200);
                }
                return redirect()->route('master.departmenttype.index')->with('success','The Departmenttype created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Departmenttype::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.departmenttype.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.departmenttype.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {

                $data = Departmenttype::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.departmenttype.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.departmenttype.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                        $validator = Validator::make($request->all(), [
                            'departmentName' => 'required',
                               'designation' => 'required',
                                'status' => 'required',
                        ]);
                           if ($validator->fails()) {
                            return response()->json([
                                'error' => $validator->errors()->all(),
                            ]);
                        }
                $data = Departmenttype::findOrFail($id);
                $request->request->add(['alias' => slugify($request->departmenttypeName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Departmenttype updated Successfully.'], 200);
                }
                return redirect()->route('master.departmenttype.index')->with('success','The Departmenttype updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Departmenttype::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Departmenttype Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Departmenttype::where('status', '<>', -1)->get();
                        return view("omis.master.departmenttype.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.departmenttype.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Departmenttype::findOrFail($id);
                        return view("omis.master.departmenttype.ajax.edit", compact('data'))->render();
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
                            $data = Departmenttype::where('status', '<>', -1)->get();
                            $html = view("omis.master.departmenttype.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Departmenttype::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Departmenttype Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Departmenttype::findOrFail($id);
                            $html = view("omis.master.departmenttype.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Departmenttype::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Departmenttype updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Departmenttype::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Departmenttype Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        