<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Servicelog;
        use Illuminate\Support\Facades\DB;
        class ServicelogController extends Controller
        {
           public function index(Request $request)
            {
                $data = Servicelog::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.servicelog.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.servicelog.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.servicelog.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.servicelog.create");
            }

            public function store(Request $request)
            {
                Servicelog::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Servicelog Created Successfully.'], 200);
                }
                return redirect()->route('inventory.servicelog.index')->with('success','The Servicelog created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Servicelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.servicelog.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.servicelog.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Servicelog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.servicelog.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.servicelog.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Servicelog::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Servicelog updated Successfully.'], 200);
                }
                return redirect()->route('inventory.servicelog.index')->with('success','The Servicelog updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Servicelog::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Servicelog Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Servicelog::where('status', '<>', -1)->get();
                        return view("omis.inventory.servicelog.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.servicelog.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Servicelog::findOrFail($id);
                        return view("omis.inventory.servicelog.ajax.edit", compact('data'))->render();
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
                            $data = Servicelog::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.servicelog.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Servicelog::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Servicelog Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Servicelog::findOrFail($id);
                            $html = view("omis.inventory.servicelog.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Servicelog::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Servicelog updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Servicelog::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Servicelog Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        