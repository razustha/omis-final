<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Service;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ServiceController extends Controller
        {
           public function index(Request $request)
            {
                $data = Service::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.service.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.service.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.service.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.service.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->serviceName)]);
                Service::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Service Created Successfully.'], 200);
                }
                return redirect()->route('inventory.service.index')->with('success','The Service created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Service::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.service.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.service.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Service::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.service.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.service.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Service::findOrFail($id);
                $request->request->add(['alias' => slugify($request->serviceName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Service updated Successfully.'], 200);
                }
                return redirect()->route('inventory.service.index')->with('success','The Service updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Service::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Service Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Service::where('status', '<>', -1)->get();
                        return view("omis.inventory.service.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.service.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Service::findOrFail($id);
                        return view("omis.inventory.service.ajax.edit", compact('data'))->render();
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
                            $data = Service::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.service.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Service::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Service Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Service::findOrFail($id);
                            $html = view("omis.inventory.service.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Service::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Service updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Service::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Service Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        