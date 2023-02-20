<?php
        namespace App\Http\Controllers\Requisition;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\ConvinceRequest;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ConvincerequestController extends Controller
        {
           public function index(Request $request)
            {
                $data = ConvinceRequest::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.requisition.convinceRequest.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.convinceRequest.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.requisition.convinceRequest.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.convinceRequest.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->convincerequestName)]);
                ConvinceRequest::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Convincerequest Created Successfully.'], 200);
                }
                return redirect()->route('requisition.convincerequest.index')->with('success','The Convincerequest created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = ConvinceRequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.convinceRequest.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.convinceRequest.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = ConvinceRequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.convinceRequest.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.convinceRequest.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = ConvinceRequest::findOrFail($id);
                $request->request->add(['alias' => slugify($request->convincerequestName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Convincerequest updated Successfully.'], 200);
                }
                return redirect()->route('requisition.convincerequest.index')->with('success','The Convincerequest updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = ConvinceRequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Convincerequest Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = ConvinceRequest::where('status', '<>', -1)->get();
                        return view("omis.requisition.convinceRequest.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.requisition.convinceRequest.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = ConvinceRequest::findOrFail($id);
                        return view("omis.requisition.convinceRequest.ajax.edit", compact('data'))->render();
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
                            $data = ConvinceRequest::where('status', '<>', -1)->get();
                            $html = view("omis.requisition.convinceRequest.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            ConvinceRequest::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Convincerequest Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = ConvinceRequest::findOrFail($id);
                            $html = view("omis.requisition.convinceRequest.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = ConvinceRequest::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Convincerequest updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = ConvinceRequest::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Convincerequest Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        