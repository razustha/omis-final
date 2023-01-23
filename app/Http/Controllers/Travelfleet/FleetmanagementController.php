<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Fleetmanagement;
        use Illuminate\Support\Facades\DB;
        class FleetmanagementController extends Controller
        {
           public function index(Request $request)
            {
                $data = Fleetmanagement::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.create");
            }

            public function store(Request $request)
            {
                Fleetmanagement::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.fleetmanagement.index')->with('success','The Fleetmanagement created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Fleetmanagement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Fleetmanagement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Fleetmanagement::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.fleetmanagement.index')->with('success','The Fleetmanagement updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Fleetmanagement::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Fleetmanagement Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Fleetmanagement::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.travelfleet.fleetmanagement.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Fleetmanagement::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Fleetmanagement::findOrFail($id);
                            $html = view("omis.ajax.travelfleet.fleetmanagement.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Fleetmanagement::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Fleetmanagement::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        