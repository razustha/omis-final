<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Fleet;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FleetController extends Controller
        {
           public function index(Request $request)
            {
                $data = Fleet::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.fleet.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.fleet.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.fleet.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.fleet.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->fleetName)]);
                Fleet::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleet Created Successfully.'], 200);
                }
                return redirect()->route('master.fleet.index')->with('success','The Fleet created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Fleet::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.fleet.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.fleet.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Fleet::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.fleet.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.fleet.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Fleet::findOrFail($id);
                $request->request->add(['alias' => slugify($request->fleetName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleet updated Successfully.'], 200);
                }
                return redirect()->route('master.fleet.index')->with('success','The Fleet updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Fleet::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Fleet Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Fleet::where('status', '<>', -1)->get();
                        return view("omis.master.fleet.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.fleet.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Fleet::findOrFail($id);
                        return view("omis.master.fleet.ajax.edit", compact('data'))->render();
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
                            $data = Fleet::where('status', '<>', -1)->get();
                            $html = view("omis.master.fleet.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Fleet::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Fleet Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Fleet::findOrFail($id);
                            $html = view("omis.master.fleet.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Fleet::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Fleet updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Fleet::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Fleet Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        