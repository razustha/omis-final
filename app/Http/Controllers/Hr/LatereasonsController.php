<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Latereasons;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LatereasonsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Latereasons::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.latereasons.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.latereasons.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.latereasons.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.latereasons.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->latereasonsName)]);
                Latereasons::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Latereasons Created Successfully.'], 200);
                }
                return redirect()->route('hr.latereasons.index')->with('success','The Latereasons created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Latereasons::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.latereasons.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.latereasons.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Latereasons::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.latereasons.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.latereasons.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Latereasons::findOrFail($id);
                $request->request->add(['alias' => slugify($request->latereasonsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Latereasons updated Successfully.'], 200);
                }
                return redirect()->route('hr.latereasons.index')->with('success','The Latereasons updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Latereasons::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Latereasons Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Latereasons::where('status', '<>', -1)->get();
                        return view("omis.hr.latereasons.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.latereasons.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Latereasons::findOrFail($id);
                        return view("omis.hr.latereasons.ajax.edit", compact('data'))->render();
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
                            $data = Latereasons::where('status', '<>', -1)->get();
                            $html = view("omis.hr.latereasons.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Latereasons::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Latereasons Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Latereasons::findOrFail($id);
                            $html = view("omis.hr.latereasons.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Latereasons::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Latereasons updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Latereasons::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Latereasons Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        