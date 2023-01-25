<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Vehiclelog;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class VehiclelogController extends Controller
        {
           public function index(Request $request)
            {
                $data = Vehiclelog::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.vehiclelog.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.vehiclelog.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.vehiclelog.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.vehiclelog.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->vehiclelogName)]);
                Vehiclelog::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Vehiclelog Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.vehiclelog.index')->with('success','The Vehiclelog created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Vehiclelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.vehiclelog.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.vehiclelog.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Vehiclelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.vehiclelog.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.vehiclelog.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Vehiclelog::findOrFail($id);
                $request->request->add(['alias' => slugify($request->vehiclelogName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Vehiclelog updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.vehiclelog.index')->with('success','The Vehiclelog updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Vehiclelog::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Vehiclelog Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Vehiclelog::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.vehiclelog.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.vehiclelog.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Vehiclelog::findOrFail($id);
                        return view("omis.travelfleet.vehiclelog.ajax.edit", compact('data'))->render();
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
                            $data = Vehiclelog::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.vehiclelog.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Vehiclelog::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Vehiclelog Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Vehiclelog::findOrFail($id);
                            $html = view("omis.travelfleet.vehiclelog.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Vehiclelog::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Vehiclelog updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Vehiclelog::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Vehiclelog Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        