<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Resignation;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ResignationController extends Controller
        {
           public function index(Request $request)
            {
                $data = Resignation::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.resignation.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.resignation.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.resignation.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.resignation.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'department_id' => 'required|exists:tbl_department,department_id',
                    'employee_id' => 'required|exists:tbl_employee,employee_id',
                    'description' =>'required',
                    'resignationDate' => 'required',
                ]);
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->resignationName)]);
                Resignation::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Resignation Created Successfully.'], 200);
                }
                return redirect()->route('hr.resignation.index')->with('success','The Resignation created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Resignation::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.resignation.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.resignation.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Resignation::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.resignation.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.resignation.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'department_id' => 'required|exists:tbl_department,department_id',
                    'employee_id' => 'required|exists:tbl_employee,employee_id',
                    'description' =>'required',
                    'resignationDate' => 'required',
                ]);
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $data = Resignation::findOrFail($id);
                $request->request->add(['alias' => slugify($request->resignationName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Resignation updated Successfully.'], 200);
                }
                return redirect()->route('hr.resignation.index')->with('success','The Resignation updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Resignation::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Resignation Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Resignation::where('status', '<>', -1)->get();
                        return view("omis.hr.resignation.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.resignation.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Resignation::findOrFail($id);
                        return view("omis.hr.resignation.ajax.edit", compact('data'))->render();
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
                            $data = Resignation::where('status', '<>', -1)->get();
                            $html = view("omis.hr.resignation.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Resignation::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Resignation Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Resignation::findOrFail($id);
                            $html = view("omis.hr.resignation.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Resignation::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Resignation updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Resignation::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Resignation Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        