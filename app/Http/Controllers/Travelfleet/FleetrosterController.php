<?php
        namespace App\Http\Controllers\Travelfleet;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Travelfleet\Fleetroster;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FleetrosterController extends Controller
        {
           public function index(Request $request)
            {
                $data = Fleetroster::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetroster.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetroster.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetroster.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetroster.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->fleetrosterName)]);
                Fleetroster::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleetroster Created Successfully.'], 200);
                }
                return redirect()->route('travelfleet.fleetroster.index')->with('success','The Fleetroster created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Fleetroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetroster.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetroster.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Fleetroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.travelfleet.fleetroster.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.travelfleet.fleetroster.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Fleetroster::findOrFail($id);
                $request->request->add(['alias' => slugify($request->fleetrosterName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Fleetroster updated Successfully.'], 200);
                }
                return redirect()->route('travelfleet.fleetroster.index')->with('success','The Fleetroster updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Fleetroster::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Fleetroster Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Fleetroster::where('status', '<>', -1)->get();
                        return view("omis.travelfleet.fleetroster.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.travelfleet.fleetroster.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Fleetroster::findOrFail($id);
                        return view("omis.travelfleet.fleetroster.ajax.edit", compact('data'))->render();
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
                            $data = Fleetroster::where('status', '<>', -1)->get();
                            $html = view("omis.travelfleet.fleetroster.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Fleetroster::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Fleetroster Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Fleetroster::findOrFail($id);
                            $html = view("omis.travelfleet.fleetroster.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Fleetroster::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Fleetroster updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Fleetroster::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Fleetroster Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        