<?php
        namespace App\Http\Controllers\Crm;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Crm\Clients;
        use Illuminate\Support\Facades\DB;
        class ClientsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Clients::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.crm.clients.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.clients.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.crm.clients.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.clients.create");
            }

            public function store(Request $request)
            {
                Clients::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('crm.clients.index')->with('success','The Clients created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Clients::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.crm.clients.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.clients.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Clients::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.crm.clients.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.clients.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Clients::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('crm.clients.index')->with('success','The Clients updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Clients::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Clients Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Clients::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.crm.clients.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Clients::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Clients::findOrFail($id);
                            $html = view("omis.ajax.crm.clients.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Clients::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Clients::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        