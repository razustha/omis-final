<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Appreciation;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AppreciationController extends Controller
        {
           public function index(Request $request)
            {
                $data = Appreciation::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.appreciation.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.appreciation.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.appreciation.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.appreciation.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'appreciationTitle' => 'required',
                    'appreciationType' => 'required',
                    'recievedBy' => 'required',
                    'appreciationRecievedOn' => 'required',
                    'appreciatioanApprovedOn' =>'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }



                $request->request->add(['alias' => slugify($request->appreciationName)]);
                Appreciation::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Appreciation Created Successfully.'], 200);
                }
                return redirect()->route('hr.appreciation.index')->with('success','The Appreciation created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Appreciation::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.appreciation.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.appreciation.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Appreciation::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.appreciation.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.appreciation.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'appreciationTitle' => 'required',
                    'appreciationType' => 'required',
                    'recievedBy' => 'required',
                    'appreciationRecievedOn' => 'required',
                    'appreciatioanApprovedOn' =>'required',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $data = Appreciation::findOrFail($id);
                $request->request->add(['alias' => slugify($request->appreciationName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Appreciation updated Successfully.'], 200);
                }
                return redirect()->route('hr.appreciation.index')->with('success','The Appreciation updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Appreciation::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Appreciation Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Appreciation::where('status', '<>', -1)->get();
                        return view("omis.hr.appreciation.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.appreciation.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Appreciation::findOrFail($id);
                        return view("omis.hr.appreciation.ajax.edit", compact('data'))->render();
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
                            $data = Appreciation::where('status', '<>', -1)->get();
                            $html = view("omis.hr.appreciation.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Appreciation::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Appreciation Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Appreciation::findOrFail($id);
                            $html = view("omis.hr.appreciation.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Appreciation::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Appreciation updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Appreciation::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Appreciation Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        