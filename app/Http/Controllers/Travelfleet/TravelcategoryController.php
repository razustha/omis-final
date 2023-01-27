<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Travelcategory;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TravelcategoryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Travelcategory::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelcategory.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelcategory.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelcategory.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelcategory.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->travelcategoryName)]);
                Travelcategory::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelcategory Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelcategory.index')->with('success','The Travelcategory created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Travelcategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelcategory.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelcategory.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Travelcategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelcategory.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelcategory.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Travelcategory::findOrFail($id);
                $request->request->add(['alias' => slugify($request->travelcategoryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelcategory updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelcategory.index')->with('success','The Travelcategory updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Travelcategory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Travelcategory Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Travelcategory::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.travelcategory.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.travelcategory.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Travelcategory::findOrFail($id);
                        return view("omis.travelfleet.travelcategory.ajax.edit", compact('data'))->render();
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
                            $data = Travelcategory::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.travelcategory.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Travelcategory::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Travelcategory Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Travelcategory::findOrFail($id);
                            $html = view("omis.travelfleet.travelcategory.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Travelcategory::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Travelcategory updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Travelcategory::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Travelcategory Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        