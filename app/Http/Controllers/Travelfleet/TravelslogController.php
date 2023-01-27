<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Travelslog;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TravelslogController extends Controller
        {
           public function index(Request $request)
            {
                $data = Travelslog::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelslog.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelslog.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelslog.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelslog.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->travelslogName)]);
                Travelslog::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelslog Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelslog.index')->with('success','The Travelslog created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Travelslog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelslog.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelslog.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Travelslog::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.travelslog.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.travelslog.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Travelslog::findOrFail($id);
                $request->request->add(['alias' => slugify($request->travelslogName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelslog updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.travelslog.index')->with('success','The Travelslog updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Travelslog::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Travelslog Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Travelslog::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.travelslog.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.travelslog.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Travelslog::findOrFail($id);
                        return view("omis.travelfleet.travelslog.ajax.edit", compact('data'))->render();
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
                            $data = Travelslog::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.travelslog.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Travelslog::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Travelslog Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Travelslog::findOrFail($id);
                            $html = view("omis.travelfleet.travelslog.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Travelslog::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Travelslog updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Travelslog::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Travelslog Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        