<?php
        namespace App\Http\Controllers\Officemanagement;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Officemanagement\Purchaseservice;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class PurchaseserviceController extends Controller
        {
           public function index(Request $request)
            {
                $data = Purchaseservice::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.purchaseservice.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.purchaseservice.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.purchaseservice.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.purchaseservice.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->purchaseserviceName)]);
                Purchaseservice::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Purchaseservice Created Successfully.'], 200);
                }
                return redirect()->route('officemanagement.purchaseservice.index')->with('success','The Purchaseservice created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Purchaseservice::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.purchaseservice.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.purchaseservice.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Purchaseservice::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.purchaseservice.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.purchaseservice.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Purchaseservice::findOrFail($id);
                $request->request->add(['alias' => slugify($request->purchaseserviceName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Purchaseservice updated Successfully.'], 200);
                }
                return redirect()->route('officemanagement.purchaseservice.index')->with('success','The Purchaseservice updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Purchaseservice::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Purchaseservice Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Purchaseservice::where('status', '<>', -1)->get();
                        return view("omis.officemanagement.purchaseservice.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.officemanagement.purchaseservice.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Purchaseservice::findOrFail($id);
                        return view("omis.officemanagement.purchaseservice.ajax.edit", compact('data'))->render();
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
                            $data = Purchaseservice::where('status', '<>', -1)->get();
                            $html = view("omis.officemanagement.purchaseservice.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Purchaseservice::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Purchaseservice Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Purchaseservice::findOrFail($id);
                            $html = view("omis.officemanagement.purchaseservice.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Purchaseservice::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Purchaseservice updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Purchaseservice::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Purchaseservice Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        