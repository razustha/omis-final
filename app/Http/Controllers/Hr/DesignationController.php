<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Designation;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class DesignationController extends Controller
        {
           public function index(Request $request)
            {
                $data = Designation::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.designation.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.designation.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.designation.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.designation.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'designationName' => 'required',
                    'rank' => 'required',
                    'status' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->designationName)]);
                Designation::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Designation Created Successfully.'], 200);
                }
                return redirect()->route('hr.designation.index')->with('success','The Designation created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Designation::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.designation.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.designation.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Designation::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.designation.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.designation.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'designationName' => 'required',
                      'rank' => 'required',
                    'status' => 'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }
                $data = Designation::findOrFail($id);
                $request->request->add(['alias' => slugify($request->designationName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Designation updated Successfully.'], 200);
                }
                return redirect()->route('hr.designation.index')->with('success','The Designation updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Designation::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Designation Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Designation::where('status', '<>', -1)->get();
                        return view("omis.hr.designation.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.designation.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Designation::findOrFail($id);
                        return view("omis.hr.designation.ajax.edit", compact('data'))->render();
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
                            $data = Designation::where('status', '<>', -1)->get();
                            $html = view("omis.hr.designation.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Designation::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Designation Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Designation::findOrFail($id);
                            $html = view("omis.hr.designation.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Designation::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Designation updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Designation::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Designation Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        