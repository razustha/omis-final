<?php
        namespace App\Http\Controllers\Tbl_complaints;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Tbl_complaints\Complaints;
        use Illuminate\Support\Facades\DB;
        class ComplaintsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Complaints::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.tbl_complaints.complaints.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.tbl_complaints.complaints.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.tbl_complaints.complaints.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.tbl_complaints.complaints.create");
            }

            public function store(Request $request)
            {
                Complaints::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('tbl_complaints.complaints.index')->with('success','The Complaints created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Complaints::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.tbl_complaints.complaints.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.tbl_complaints.complaints.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Complaints::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.tbl_complaints.complaints.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.tbl_complaints.complaints.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Complaints::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('tbl_complaints.complaints.index')->with('success','The Complaints updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Complaints::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Complaints Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Complaints::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.tbl_complaints.complaints.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Complaints::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Complaints::findOrFail($id);
                            $html = view("omis.ajax.tbl_complaints.complaints.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Complaints::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Complaints::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        