<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Driverroster;
        use Illuminate\Support\Facades\DB;
        class DriverrosterController extends Controller
        {
           public function index(Request $request)
            {
                $data = Driverroster::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.driverroster.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.driverroster.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.driverroster.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.driverroster.create");
            }

            public function store(Request $request)
            {
                Driverroster::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Driverroster Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.driverroster.index')->with('success','The Driverroster created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Driverroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.driverroster.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.driverroster.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Driverroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.driverroster.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.driverroster.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Driverroster::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Driverroster updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.driverroster.index')->with('success','The Driverroster updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Driverroster::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Driverroster Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Driverroster::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.driverroster.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.driverroster.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Driverroster::findOrFail($id);
                        return view("omis.travelfleet.driverroster.ajax.edit", compact('data'))->render();
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
                            $data = Driverroster::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.driverroster.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Driverroster::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Driverroster Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Driverroster::findOrFail($id);
                            $html = view("omis.travelfleet.driverroster.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Driverroster::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Driverroster updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Driverroster::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Driverroster Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        