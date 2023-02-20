<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Policy;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class PolicyController extends Controller
        {
           public function index(Request $request)
            {
                $data = Policy::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.policy.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.policy.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.policy.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.policy.create");
            }

            public function store(Request $request)
            {
                
 $validator = Validator::make($request->all(), [
    'policyName' => 'required',
]);

if ($validator->fails()) {
    return response()->json([
        'error' => $validator->errors()->all(),
    ]);
}
                $request->request->add(['alias' => slugify($request->policyName)]);
                Policy::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Policy Created Successfully.'], 200);
                }
                return redirect()->route('master.policy.index')->with('success','The Policy created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Policy::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.policy.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.policy.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Policy::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.policy.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.policy.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                                
 $validator = Validator::make($request->all(), [
    'policyName' => 'required',
]);

if ($validator->fails()) {
    return response()->json([
        'error' => $validator->errors()->all(),
    ]);
}
                $data = Policy::findOrFail($id);
                $request->request->add(['alias' => slugify($request->policyName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Policy updated Successfully.'], 200);
                }
                return redirect()->route('master.policy.index')->with('success','The Policy updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Policy::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Policy Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Policy::where('status', '<>', -1)->get();
                        return view("omis.master.policy.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.policy.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Policy::findOrFail($id);
                        return view("omis.master.policy.ajax.edit", compact('data'))->render();
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
                            $data = Policy::where('status', '<>', -1)->get();
                            $html = view("omis.master.policy.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Policy::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Policy Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Policy::findOrFail($id);
                            $html = view("omis.master.policy.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Policy::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Policy updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Policy::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Policy Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        