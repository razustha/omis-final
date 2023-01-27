<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Travelrequest;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TravelrequestController extends Controller
        {
           public function index(Request $request)
            {
                $data = Travelrequest::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelrequest.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelrequest.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelrequest.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelrequest.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->travelrequestName)]);
                Travelrequest::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelrequest Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelrequest.index')->with('success','The Travelrequest created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Travelrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelrequest.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelrequest.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Travelrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelrequest.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelrequest.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Travelrequest::findOrFail($id);
                $request->request->add(['alias' => slugify($request->travelrequestName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelrequest updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelrequest.index')->with('success','The Travelrequest updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Travelrequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Travelrequest Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Travelrequest::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.travelrequest.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.travelrequest.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Travelrequest::findOrFail($id);
                        return view("omis.travelfleet.travelrequest.ajax.edit", compact('data'))->render();
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
                            $data = Travelrequest::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.travelrequest.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Travelrequest::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Travelrequest Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Travelrequest::findOrFail($id);
                            $html = view("omis.travelfleet.travelrequest.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Travelrequest::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Travelrequest updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Travelrequest::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Travelrequest Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
