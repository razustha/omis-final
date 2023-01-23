<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Department;
        use Illuminate\Support\Facades\DB;
        class DepartmentController extends Controller
        {
           public function index(Request $request)
            {
                $data = Department::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.department.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.department.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.department.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.department.create");
            }

            public function store(Request $request)
            {
                Department::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('hr.department.index')->with('success','The Department created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Department::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.department.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.department.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Department::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.department.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.department.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Department::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('hr.department.index')->with('success','The Department updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Department::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Department Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Department::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.hr.department.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Department::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Department::findOrFail($id);
                            $html = view("omis.ajax.hr.department.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Department::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Department::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        