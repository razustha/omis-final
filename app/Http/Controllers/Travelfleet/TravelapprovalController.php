<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Travelapproval;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TravelapprovalController extends Controller
        {
           public function index(Request $request)
            {
                $data = Travelapproval::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelapproval.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelapproval.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelapproval.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelapproval.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->travelapprovalName)]);
                Travelapproval::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelapproval Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelapproval.index')->with('success','The Travelapproval created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Travelapproval::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelapproval.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelapproval.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Travelapproval::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelapproval.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelapproval.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Travelapproval::findOrFail($id);
                $request->request->add(['alias' => slugify($request->travelapprovalName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelapproval updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelapproval.index')->with('success','The Travelapproval updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Travelapproval::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Travelapproval Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Travelapproval::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.travelapproval.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.travelapproval.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Travelapproval::findOrFail($id);
                        return view("omis.travelfleet.travelapproval.ajax.edit", compact('data'))->render();
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
                            $data = Travelapproval::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.travelapproval.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Travelapproval::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Travelapproval Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Travelapproval::findOrFail($id);
                            $html = view("omis.travelfleet.travelapproval.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Travelapproval::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Travelapproval updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Travelapproval::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Travelapproval Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        