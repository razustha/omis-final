<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Barcodemanagement;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class BarcodemanagementController extends Controller
        {
           public function index(Request $request)
            {
                $data = Barcodemanagement::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.barcodemanagement.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.barcodemanagement.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.barcodemanagement.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.barcodemanagement.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->barcodemanagementName)]);
                Barcodemanagement::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Barcodemanagement Created Successfully.'], 200);
                }
                return redirect()->route('inventory.barcodemanagement.index')->with('success','The Barcodemanagement created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Barcodemanagement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.barcodemanagement.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.barcodemanagement.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Barcodemanagement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.barcodemanagement.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.barcodemanagement.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Barcodemanagement::findOrFail($id);
                $request->request->add(['alias' => slugify($request->barcodemanagementName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Barcodemanagement updated Successfully.'], 200);
                }
                return redirect()->route('inventory.barcodemanagement.index')->with('success','The Barcodemanagement updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Barcodemanagement::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Barcodemanagement Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Barcodemanagement::where('status', '<>', -1)->get();
                        return view("omis.inventory.barcodemanagement.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.barcodemanagement.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Barcodemanagement::findOrFail($id);
                        return view("omis.inventory.barcodemanagement.ajax.edit", compact('data'))->render();
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
                            $data = Barcodemanagement::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.barcodemanagement.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Barcodemanagement::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Barcodemanagement Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Barcodemanagement::findOrFail($id);
                            $html = view("omis.inventory.barcodemanagement.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Barcodemanagement::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Barcodemanagement updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Barcodemanagement::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Barcodemanagement Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        