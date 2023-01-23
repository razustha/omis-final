<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Absentreason;
        use Illuminate\Support\Facades\DB;
        class AbsentreasonController extends Controller
        {
           public function index(Request $request)
            {
                $data = Absentreason::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.absentreason.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.absentreason.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.absentreason.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.absentreason.create");
            }

            public function store(Request $request)
            {
                Absentreason::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('hr.absentreason.index')->with('success','The Absentreason created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Absentreason::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.absentreason.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.absentreason.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Absentreason::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.absentreason.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.absentreason.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Absentreason::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('hr.absentreason.index')->with('success','The Absentreason updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Absentreason::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Absentreason Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Absentreason::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.hr.absentreason.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Absentreason::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Absentreason::findOrFail($id);
                            $html = view("omis.ajax.hr.absentreason.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Absentreason::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Absentreason::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        