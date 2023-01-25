<?php
        namespace App\Http\Controllers\Requisition;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\Leaverequest;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LeaverequestController extends Controller
        {
           public function index(Request $request)
            {
                $data = Leaverequest::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.requisition.leaverequest.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.leaverequest.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.requisition.leaverequest.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.leaverequest.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->leaverequestName)]);
                Leaverequest::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leaverequest Created Successfully.'], 200);
                }
                return redirect()->route('requisition.leaverequest.index')->with('success','The Leaverequest created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Leaverequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.leaverequest.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.leaverequest.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Leaverequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.leaverequest.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.leaverequest.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Leaverequest::findOrFail($id);
                $request->request->add(['alias' => slugify($request->leaverequestName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leaverequest updated Successfully.'], 200);
                }
                return redirect()->route('requisition.leaverequest.index')->with('success','The Leaverequest updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Leaverequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Leaverequest Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Leaverequest::where('status', '<>', -1)->get();
                        return view("omis.requisition.leaverequest.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.requisition.leaverequest.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Leaverequest::findOrFail($id);
                        return view("omis.requisition.leaverequest.ajax.edit", compact('data'))->render();
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
                            $data = Leaverequest::where('status', '<>', -1)->get();
                            $html = view("omis.requisition.leaverequest.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Leaverequest::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Leaverequest Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Leaverequest::findOrFail($id);
                            $html = view("omis.requisition.leaverequest.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Leaverequest::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Leaverequest updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Leaverequest::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Leaverequest Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        