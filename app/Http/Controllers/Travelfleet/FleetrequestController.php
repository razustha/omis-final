<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Fleetrequest;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FleetrequestController extends Controller
        {
           public function index(Request $request)
            {
                $data = Fleetrequest::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetrequest.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetrequest.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetrequest.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetrequest.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->fleetrequestName)]);
                Fleetrequest::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleetrequest Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.fleetrequest.index')->with('success','The Fleetrequest created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Fleetrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetrequest.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetrequest.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Fleetrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetrequest.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetrequest.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Fleetrequest::findOrFail($id);
                $request->request->add(['alias' => slugify($request->fleetrequestName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleetrequest updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.fleetrequest.index')->with('success','The Fleetrequest updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Fleetrequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Fleetrequest Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Fleetrequest::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.fleetrequest.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.fleetrequest.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Fleetrequest::findOrFail($id);
                        return view("omis.travelfleet.fleetrequest.ajax.edit", compact('data'))->render();
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
                            $data = Fleetrequest::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.fleetrequest.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Fleetrequest::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Fleetrequest Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Fleetrequest::findOrFail($id);
                            $html = view("omis.travelfleet.fleetrequest.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Fleetrequest::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Fleetrequest updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Fleetrequest::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Fleetrequest Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        