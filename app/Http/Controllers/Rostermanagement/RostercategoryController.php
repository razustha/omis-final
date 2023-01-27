<?php
        namespace App\Http\Controllers\Rostermanagement;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Rostermanagement\Rostercategory;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class RostercategoryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Rostercategory::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rostercategory.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rostercategory.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rostercategory.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rostercategory.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->rostercategoryName)]);
                Rostercategory::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Rostercategory Created Successfully.'], 200);
                }
                return redirect()->route('rostermanagement.rostercategory.index')->with('success','The Rostercategory created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Rostercategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rostercategory.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rostercategory.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Rostercategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rostercategory.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rostercategory.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Rostercategory::findOrFail($id);
                $request->request->add(['alias' => slugify($request->rostercategoryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Rostercategory updated Successfully.'], 200);
                }
                return redirect()->route('rostermanagement.rostercategory.index')->with('success','The Rostercategory updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Rostercategory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Rostercategory Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Rostercategory::where('status', '<>', -1)->get();
                        return view("omis.rostermanagement.rostercategory.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.rostermanagement.rostercategory.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Rostercategory::findOrFail($id);
                        return view("omis.rostermanagement.rostercategory.ajax.edit", compact('data'))->render();
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
                            $data = Rostercategory::where('status', '<>', -1)->get();
                            $html = view("omis.rostermanagement.rostercategory.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Rostercategory::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Rostercategory Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Rostercategory::findOrFail($id);
                            $html = view("omis.rostermanagement.rostercategory.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Rostercategory::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Rostercategory updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Rostercategory::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Rostercategory Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        