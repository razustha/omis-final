<?php
        namespace App\Http\Controllers\Supplier;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Supplier\Addsupplier;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AddsupplierController extends Controller
        {
           public function index(Request $request)
            {
                $data = Addsupplier::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.supplier.addsupplier.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.addsupplier.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.supplier.addsupplier.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.addsupplier.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->addsupplierName)]);
                Addsupplier::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Addsupplier Created Successfully.'], 200);
                }
                return redirect()->route('supplier.addsupplier.index')->with('success','The Addsupplier created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Addsupplier::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.supplier.addsupplier.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.addsupplier.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Addsupplier::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.supplier.addsupplier.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.addsupplier.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Addsupplier::findOrFail($id);
                $request->request->add(['alias' => slugify($request->addsupplierName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Addsupplier updated Successfully.'], 200);
                }
                return redirect()->route('supplier.addsupplier.index')->with('success','The Addsupplier updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Addsupplier::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Addsupplier Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Addsupplier::where('status', '<>', -1)->get();
                        return view("omis.supplier.addsupplier.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.supplier.addsupplier.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Addsupplier::findOrFail($id);
                        return view("omis.supplier.addsupplier.ajax.edit", compact('data'))->render();
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
                            $data = Addsupplier::where('status', '<>', -1)->get();
                            $html = view("omis.supplier.addsupplier.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Addsupplier::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Addsupplier Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Addsupplier::findOrFail($id);
                            $html = view("omis.supplier.addsupplier.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Addsupplier::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Addsupplier updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Addsupplier::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Addsupplier Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        