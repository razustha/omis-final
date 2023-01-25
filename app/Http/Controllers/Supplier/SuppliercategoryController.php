<?php
        namespace App\Http\Controllers\Supplier;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Supplier\Suppliercategory;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class SuppliercategoryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Suppliercategory::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.supplier.suppliercategory.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.suppliercategory.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.supplier.suppliercategory.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.suppliercategory.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->suppliercategoryName)]);
                Suppliercategory::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Suppliercategory Created Successfully.'], 200);
                }
                return redirect()->route('supplier.suppliercategory.index')->with('success','The Suppliercategory created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Suppliercategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.supplier.suppliercategory.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.suppliercategory.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Suppliercategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.supplier.suppliercategory.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.supplier.suppliercategory.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Suppliercategory::findOrFail($id);
                $request->request->add(['alias' => slugify($request->suppliercategoryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Suppliercategory updated Successfully.'], 200);
                }
                return redirect()->route('supplier.suppliercategory.index')->with('success','The Suppliercategory updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Suppliercategory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Suppliercategory Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Suppliercategory::where('status', '<>', -1)->get();
                        return view("omis.supplier.suppliercategory.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.supplier.suppliercategory.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Suppliercategory::findOrFail($id);
                        return view("omis.supplier.suppliercategory.ajax.edit", compact('data'))->render();
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
                            $data = Suppliercategory::where('status', '<>', -1)->get();
                            $html = view("omis.supplier.suppliercategory.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Suppliercategory::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Suppliercategory Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Suppliercategory::findOrFail($id);
                            $html = view("omis.supplier.suppliercategory.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Suppliercategory::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Suppliercategory updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Suppliercategory::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Suppliercategory Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        