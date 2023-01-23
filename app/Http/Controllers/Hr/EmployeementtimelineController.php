<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Employeementtimeline;
        use Illuminate\Support\Facades\DB;
        class EmployeementtimelineController extends Controller
        {
           public function index(Request $request)
            {
                $data = Employeementtimeline::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.create");
            }

            public function store(Request $request)
            {
                Employeementtimeline::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('hr.employeementtimeline.index')->with('success','The Employeementtimeline created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Employeementtimeline::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Employeementtimeline::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Employeementtimeline::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('hr.employeementtimeline.index')->with('success','The Employeementtimeline updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Employeementtimeline::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Employeementtimeline Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Employeementtimeline::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.hr.employeementtimeline.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Employeementtimeline::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Employeementtimeline::findOrFail($id);
                            $html = view("omis.ajax.hr.employeementtimeline.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Employeementtimeline::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Employeementtimeline::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        