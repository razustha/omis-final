<?php
        namespace App\Http\Controllers\Assets;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Assets\Equipmentdemand;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class EquipmentdemandController extends Controller
        {
           public function index(Request $request)
            {
                $data = Equipmentdemand::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.assets.equipmentdemand.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.equipmentdemand.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.assets.equipmentdemand.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.equipmentdemand.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->equipmentdemandName)]);
                Equipmentdemand::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Equipmentdemand Created Successfully.'], 200);
                }
                return redirect()->route('assets.equipmentdemand.index')->with('success','The Equipmentdemand created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Equipmentdemand::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.assets.equipmentdemand.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.equipmentdemand.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Equipmentdemand::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.assets.equipmentdemand.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.equipmentdemand.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Equipmentdemand::findOrFail($id);
                $request->request->add(['alias' => slugify($request->equipmentdemandName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Equipmentdemand updated Successfully.'], 200);
                }
                return redirect()->route('assets.equipmentdemand.index')->with('success','The Equipmentdemand updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Equipmentdemand::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Equipmentdemand Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Equipmentdemand::where('status', '<>', -1)->get();
                        return view("omis.assets.equipmentdemand.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.assets.equipmentdemand.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Equipmentdemand::findOrFail($id);
                        return view("omis.assets.equipmentdemand.ajax.edit", compact('data'))->render();
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
                            $data = Equipmentdemand::where('status', '<>', -1)->get();
                            $html = view("omis.assets.equipmentdemand.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Equipmentdemand::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Equipmentdemand Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Equipmentdemand::findOrFail($id);
                            $html = view("omis.assets.equipmentdemand.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Equipmentdemand::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Equipmentdemand updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Equipmentdemand::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Equipmentdemand Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        