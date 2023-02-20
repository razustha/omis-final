<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Organizationcategory;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class OrganizationcategoryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Organizationcategory::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.organizationcategory.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.organizationcategory.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.organizationcategory.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.organizationcategory.create");
            }

            public function store(Request $request)
            {
                                
                $validator = Validator::make($request->all(), [
                    '	organizationCategoryParent_id	' => 'required',
                    'organizationCategoryName' => 'required',
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->organizationcategoryName)]);
                Organizationcategory::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Organizationcategory Created Successfully.'], 200);
                }
                return redirect()->route('master.organizationcategory.index')->with('success','The Organizationcategory created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Organizationcategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.organizationcategory.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.organizationcategory.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Organizationcategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.organizationcategory.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.organizationcategory.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    '	organizationCategoryParent_id	' => 'required',
                    'organizationCategoryName' => 'required',
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }
                $data = Organizationcategory::findOrFail($id);
                $request->request->add(['alias' => slugify($request->organizationcategoryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Organizationcategory updated Successfully.'], 200);
                }
                return redirect()->route('master.organizationcategory.index')->with('success','The Organizationcategory updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Organizationcategory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Organizationcategory Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Organizationcategory::where('status', '<>', -1)->get();
                        return view("omis.master.organizationcategory.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.organizationcategory.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Organizationcategory::findOrFail($id);
                        return view("omis.master.organizationcategory.ajax.edit", compact('data'))->render();
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
                            $data = Organizationcategory::where('status', '<>', -1)->get();
                            $html = view("omis.master.organizationcategory.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Organizationcategory::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Organizationcategory Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Organizationcategory::findOrFail($id);
                            $html = view("omis.master.organizationcategory.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Organizationcategory::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Organizationcategory updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Organizationcategory::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Organizationcategory Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        