<?php
        namespace App\Http\Controllers\Assets;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Assets\Assestcategory;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AssestcategoryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Assestcategory::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.assets.assestcategory.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.assestcategory.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.assets.assestcategory.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.assestcategory.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->assestcategoryName)]);
                Assestcategory::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Assestcategory Created Successfully.'], 200);
                }
                return redirect()->route('assets.assestcategory.index')->with('success','The Assestcategory created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Assestcategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.assets.assestcategory.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.assestcategory.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Assestcategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.assets.assestcategory.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.assets.assestcategory.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Assestcategory::findOrFail($id);
                $request->request->add(['alias' => slugify($request->assestcategoryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Assestcategory updated Successfully.'], 200);
                }
                return redirect()->route('assets.assestcategory.index')->with('success','The Assestcategory updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Assestcategory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Assestcategory Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Assestcategory::where('status', '<>', -1)->get();
                        return view("omis.assets.assestcategory.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.assets.assestcategory.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Assestcategory::findOrFail($id);
                        return view("omis.assets.assestcategory.ajax.edit", compact('data'))->render();
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
                            $data = Assestcategory::where('status', '<>', -1)->get();
                            $html = view("omis.assets.assestcategory.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Assestcategory::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Assestcategory Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Assestcategory::findOrFail($id);
                            $html = view("omis.assets.assestcategory.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Assestcategory::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Assestcategory updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Assestcategory::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Assestcategory Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        