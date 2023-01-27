<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Product;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ProductController extends Controller
        {
           public function index(Request $request)
            {
                $data = Product::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.product.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.product.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.product.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.product.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->productName)]);
                Product::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Product Created Successfully.'], 200);
                }
                return redirect()->route('inventory.product.index')->with('success','The Product created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Product::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.product.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.product.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Product::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.product.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.product.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Product::findOrFail($id);
                $request->request->add(['alias' => slugify($request->productName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Product updated Successfully.'], 200);
                }
                return redirect()->route('inventory.product.index')->with('success','The Product updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Product::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Product Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Product::where('status', '<>', -1)->get();
                        return view("omis.inventory.product.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.product.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Product::findOrFail($id);
                        return view("omis.inventory.product.ajax.edit", compact('data'))->render();
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
                            $data = Product::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.product.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Product::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Product Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Product::findOrFail($id);
                            $html = view("omis.inventory.product.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Product::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Product updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Product::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Product Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        