<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Maintenancelog;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class MaintenancelogController extends Controller
        {
           public function index(Request $request)
            {
                $data = Maintenancelog::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.maintenancelog.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.maintenancelog.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.maintenancelog.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.maintenancelog.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->maintenancelogName)]);
                Maintenancelog::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Maintenancelog Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.maintenancelog.index')->with('success','The Maintenancelog created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Maintenancelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.maintenancelog.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.maintenancelog.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Maintenancelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.maintenancelog.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.maintenancelog.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Maintenancelog::findOrFail($id);
                $request->request->add(['alias' => slugify($request->maintenancelogName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Maintenancelog updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.maintenancelog.index')->with('success','The Maintenancelog updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Maintenancelog::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Maintenancelog Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Maintenancelog::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.maintenancelog.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.maintenancelog.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Maintenancelog::findOrFail($id);
                        return view("omis.travelfleet.maintenancelog.ajax.edit", compact('data'))->render();
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
                            $data = Maintenancelog::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.maintenancelog.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Maintenancelog::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Maintenancelog Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Maintenancelog::findOrFail($id);
                            $html = view("omis.travelfleet.maintenancelog.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Maintenancelog::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Maintenancelog updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Maintenancelog::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Maintenancelog Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        