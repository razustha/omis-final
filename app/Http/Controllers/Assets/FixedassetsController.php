<?php
        namespace App\Http\Controllers\Assets;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Assets\Fixedassets;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FixedassetsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Fixedassets::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.assets.fixedassets.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.fixedassets.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.assets.fixedassets.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.fixedassets.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->fixedassetsName)]);
                Fixedassets::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fixedassets Created Successfully.'], 200);
                }
                return redirect()->route('assets.fixedassets.index')->with('success','The Fixedassets created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Fixedassets::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.assets.fixedassets.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.fixedassets.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Fixedassets::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.assets.fixedassets.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.fixedassets.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Fixedassets::findOrFail($id);
                $request->request->add(['alias' => slugify($request->fixedassetsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fixedassets updated Successfully.'], 200);
                }
                return redirect()->route('assets.fixedassets.index')->with('success','The Fixedassets updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Fixedassets::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Fixedassets Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Fixedassets::where('status', '<>', -1)->get();
                        return view("omis.assets.fixedassets.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.assets.fixedassets.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Fixedassets::findOrFail($id);
                        return view("omis.assets.fixedassets.ajax.edit", compact('data'))->render();
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
                            $data = Fixedassets::where('status', '<>', -1)->get();
                            $html = view("omis.assets.fixedassets.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Fixedassets::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Fixedassets Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Fixedassets::findOrFail($id);
                            $html = view("omis.assets.fixedassets.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Fixedassets::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Fixedassets updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Fixedassets::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Fixedassets Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        