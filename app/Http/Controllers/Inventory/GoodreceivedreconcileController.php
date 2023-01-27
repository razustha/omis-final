<?php
        namespace App\Http\Controllers\Inventory;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Inventory\Goodreceivedreconcile;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class GoodreceivedreconcileController extends Controller
        {
           public function index(Request $request)
            {
                $data = Goodreceivedreconcile::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.inventory.goodreceivedreconcile.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.goodreceivedreconcile.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.inventory.goodreceivedreconcile.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.goodreceivedreconcile.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->goodreceivedreconcileName)]);
                Goodreceivedreconcile::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Goodreceivedreconcile Created Successfully.'], 200);
                }
                return redirect()->route('inventory.goodreceivedreconcile.index')->with('success','The Goodreceivedreconcile created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Goodreceivedreconcile::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.goodreceivedreconcile.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.goodreceivedreconcile.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Goodreceivedreconcile::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.inventory.goodreceivedreconcile.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.inventory.goodreceivedreconcile.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Goodreceivedreconcile::findOrFail($id);
                $request->request->add(['alias' => slugify($request->goodreceivedreconcileName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Goodreceivedreconcile updated Successfully.'], 200);
                }
                return redirect()->route('inventory.goodreceivedreconcile.index')->with('success','The Goodreceivedreconcile updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Goodreceivedreconcile::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Goodreceivedreconcile Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Goodreceivedreconcile::where('status', '<>', -1)->get();
                        return view("omis.inventory.goodreceivedreconcile.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.inventory.goodreceivedreconcile.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Goodreceivedreconcile::findOrFail($id);
                        return view("omis.inventory.goodreceivedreconcile.ajax.edit", compact('data'))->render();
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
                            $data = Goodreceivedreconcile::where('status', '<>', -1)->get();
                            $html = view("omis.inventory.goodreceivedreconcile.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Goodreceivedreconcile::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Goodreceivedreconcile Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Goodreceivedreconcile::findOrFail($id);
                            $html = view("omis.inventory.goodreceivedreconcile.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Goodreceivedreconcile::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Goodreceivedreconcile updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Goodreceivedreconcile::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Goodreceivedreconcile Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        