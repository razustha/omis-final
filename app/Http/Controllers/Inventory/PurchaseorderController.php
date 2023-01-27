<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Purchaseorder;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class PurchaseorderController extends Controller
        {
           public function index(Request $request)
            {
                $data = Purchaseorder::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseorder.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseorder.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseorder.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseorder.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->purchaseorderName)]);
                Purchaseorder::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Purchaseorder Created Successfully.'], 200);
                }
                return redirect()->route('inventory.purchaseorder.index')->with('success','The Purchaseorder created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Purchaseorder::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseorder.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseorder.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Purchaseorder::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseorder.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseorder.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Purchaseorder::findOrFail($id);
                $request->request->add(['alias' => slugify($request->purchaseorderName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Purchaseorder updated Successfully.'], 200);
                }
                return redirect()->route('inventory.purchaseorder.index')->with('success','The Purchaseorder updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Purchaseorder::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Purchaseorder Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Purchaseorder::where('status', '<>', -1)->get();
                        return view("omis.inventory.purchaseorder.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.purchaseorder.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Purchaseorder::findOrFail($id);
                        return view("omis.inventory.purchaseorder.ajax.edit", compact('data'))->render();
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
                            $data = Purchaseorder::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.purchaseorder.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Purchaseorder::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Purchaseorder Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Purchaseorder::findOrFail($id);
                            $html = view("omis.inventory.purchaseorder.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Purchaseorder::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Purchaseorder updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Purchaseorder::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Purchaseorder Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        