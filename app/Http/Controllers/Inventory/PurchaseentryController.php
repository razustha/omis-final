<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Purchaseentry;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class PurchaseentryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Purchaseentry::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseentry.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseentry.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseentry.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseentry.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->purchaseentryName)]);
                Purchaseentry::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Purchaseentry Created Successfully.'], 200);
                }
                return redirect()->route('inventory.purchaseentry.index')->with('success','The Purchaseentry created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Purchaseentry::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseentry.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseentry.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Purchaseentry::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.purchaseentry.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.purchaseentry.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Purchaseentry::findOrFail($id);
                $request->request->add(['alias' => slugify($request->purchaseentryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Purchaseentry updated Successfully.'], 200);
                }
                return redirect()->route('inventory.purchaseentry.index')->with('success','The Purchaseentry updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Purchaseentry::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Purchaseentry Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Purchaseentry::where('status', '<>', -1)->get();
                        return view("omis.inventory.purchaseentry.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.purchaseentry.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Purchaseentry::findOrFail($id);
                        return view("omis.inventory.purchaseentry.ajax.edit", compact('data'))->render();
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
                            $data = Purchaseentry::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.purchaseentry.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Purchaseentry::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Purchaseentry Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Purchaseentry::findOrFail($id);
                            $html = view("omis.inventory.purchaseentry.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Purchaseentry::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Purchaseentry updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Purchaseentry::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Purchaseentry Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        