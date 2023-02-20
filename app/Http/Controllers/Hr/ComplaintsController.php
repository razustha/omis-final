<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Complaints;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ComplaintsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Complaints::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.complaints.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.complaints.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.complaints.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.complaints.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'companyName' => 'required',
                    'companyTitle' => 'required',
                    'complaintDate' => 'required',
                    'complaintFrom'  =>  'required',
                    'complaintAgainst' => 'required'
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }



                $request->request->add(['alias' => slugify($request->complaintsName)]);
                Complaints::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Complaints Created Successfully.'], 200);
                }
                return redirect()->route('hr.complaints.index')->with('success','The Complaints created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Complaints::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.complaints.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.complaints.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Complaints::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.complaints.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.complaints.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'companyName' => 'required',
                    'companyTitle' => 'required',
                    'complaintDate' => 'required',
                    'complaintFrom'  =>  'required',
                    'complaintAgainst' => 'required'
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $data = Complaints::findOrFail($id);
                $request->request->add(['alias' => slugify($request->complaintsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Complaints updated Successfully.'], 200);
                }
                return redirect()->route('hr.complaints.index')->with('success','The Complaints updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Complaints::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Complaints Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Complaints::where('status', '<>', -1)->get();
                        return view("omis.hr.complaints.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.complaints.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Complaints::findOrFail($id);
                        return view("omis.hr.complaints.ajax.edit", compact('data'))->render();
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
                            $data = Complaints::where('status', '<>', -1)->get();
                            $html = view("omis.hr.complaints.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Complaints::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Complaints Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Complaints::findOrFail($id);
                            $html = view("omis.hr.complaints.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Complaints::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Complaints updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Complaints::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Complaints Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        