<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Stockreconcile;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class StockreconcileController extends Controller
        {
           public function index(Request $request)
            {
                $data = Stockreconcile::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.stockreconcile.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.stockreconcile.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.stockreconcile.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.stockreconcile.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->stockreconcileName)]);
                Stockreconcile::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Stockreconcile Created Successfully.'], 200);
                }
                return redirect()->route('inventory.stockreconcile.index')->with('success','The Stockreconcile created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Stockreconcile::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.stockreconcile.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.stockreconcile.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Stockreconcile::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.stockreconcile.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.stockreconcile.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Stockreconcile::findOrFail($id);
                $request->request->add(['alias' => slugify($request->stockreconcileName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Stockreconcile updated Successfully.'], 200);
                }
                return redirect()->route('inventory.stockreconcile.index')->with('success','The Stockreconcile updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Stockreconcile::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Stockreconcile Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Stockreconcile::where('status', '<>', -1)->get();
                        return view("omis.inventory.stockreconcile.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.stockreconcile.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Stockreconcile::findOrFail($id);
                        return view("omis.inventory.stockreconcile.ajax.edit", compact('data'))->render();
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
                            $data = Stockreconcile::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.stockreconcile.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Stockreconcile::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Stockreconcile Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Stockreconcile::findOrFail($id);
                            $html = view("omis.inventory.stockreconcile.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Stockreconcile::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Stockreconcile updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Stockreconcile::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Stockreconcile Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        