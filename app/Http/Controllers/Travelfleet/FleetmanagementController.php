<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Fleetmanagement;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FleetmanagementController extends Controller
        {
           public function index(Request $request)
            {
                $data = Fleetmanagement::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->fleetmanagementName)]);
                Fleetmanagement::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleetmanagement Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.fleetmanagement.index')->with('success','The Fleetmanagement created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Fleetmanagement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Fleetmanagement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetmanagement.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetmanagement.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Fleetmanagement::findOrFail($id);
                $request->request->add(['alias' => slugify($request->fleetmanagementName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleetmanagement updated Successfully.'], 200);
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

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Fleetmanagement::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.fleetmanagement.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.fleetmanagement.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Fleetmanagement::findOrFail($id);
                        return view("omis.travelfleet.fleetmanagement.ajax.edit", compact('data'))->render();
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
                            $data = Fleetmanagement::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.fleetmanagement.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Fleetmanagement::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Fleetmanagement Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Fleetmanagement::findOrFail($id);
                            $html = view("omis.travelfleet.fleetmanagement.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Fleetmanagement::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Fleetmanagement updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Fleetmanagement::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Fleetmanagement Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        