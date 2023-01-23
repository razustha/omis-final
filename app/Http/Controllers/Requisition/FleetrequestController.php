<?php
        namespace App\Http\Controllers\Requisition;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\Fleetrequest;
        use Illuminate\Support\Facades\DB;
        class FleetrequestController extends Controller
        {
           public function index(Request $request)
            {
                $data = Fleetrequest::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.requisition.fleetrequest.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.fleetrequest.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.requisition.fleetrequest.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.fleetrequest.create");
            }

            public function store(Request $request)
            {
                Fleetrequest::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('requisition.fleetrequest.index')->with('success','The Fleetrequest created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Fleetrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.fleetrequest.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.fleetrequest.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Fleetrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.fleetrequest.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.fleetrequest.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Fleetrequest::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('requisition.fleetrequest.index')->with('success','The Fleetrequest updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Fleetrequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Fleetrequest Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Fleetrequest::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.requisition.fleetrequest.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Fleetrequest::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Fleetrequest::findOrFail($id);
                            $html = view("omis.ajax.requisition.fleetrequest.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Fleetrequest::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Fleetrequest::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        