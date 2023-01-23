<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Attendence;
        use Illuminate\Support\Facades\DB;
        class AttendenceController extends Controller
        {
           public function index(Request $request)
            {
                $data = Attendence::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.create");
            }

            public function store(Request $request)
            {
                Attendence::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('hr.attendence.index')->with('success','The Attendence created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Attendence::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Attendence::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Attendence::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('hr.attendence.index')->with('success','The Attendence updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Attendence::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Attendence Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Attendence::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.hr.attendence.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Attendence::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Attendence::findOrFail($id);
                            $html = view("omis.ajax.hr.attendence.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Attendence::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Attendence::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        