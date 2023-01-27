<?php
        namespace App\Http\Controllers\Requisition;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\Compensatoryleave;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class CompensatoryleaveController extends Controller
        {
           public function index(Request $request)
            {
                $data = Compensatoryleave::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.requisition.compensatoryleave.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.compensatoryleave.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.requisition.compensatoryleave.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.compensatoryleave.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->compensatoryleaveName)]);
                Compensatoryleave::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Compensatoryleave Created Successfully.'], 200);
                }
                return redirect()->route('requisition.compensatoryleave.index')->with('success','The Compensatoryleave created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Compensatoryleave::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.compensatoryleave.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.compensatoryleave.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Compensatoryleave::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.compensatoryleave.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.compensatoryleave.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Compensatoryleave::findOrFail($id);
                $request->request->add(['alias' => slugify($request->compensatoryleaveName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Compensatoryleave updated Successfully.'], 200);
                }
                return redirect()->route('requisition.compensatoryleave.index')->with('success','The Compensatoryleave updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Compensatoryleave::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Compensatoryleave Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Compensatoryleave::where('status', '<>', -1)->get();
                        return view("omis.requisition.compensatoryleave.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.requisition.compensatoryleave.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Compensatoryleave::findOrFail($id);
                        return view("omis.requisition.compensatoryleave.ajax.edit", compact('data'))->render();
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
                            $data = Compensatoryleave::where('status', '<>', -1)->get();
                            $html = view("omis.requisition.compensatoryleave.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Compensatoryleave::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Compensatoryleave Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Compensatoryleave::findOrFail($id);
                            $html = view("omis.requisition.compensatoryleave.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Compensatoryleave::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Compensatoryleave updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Compensatoryleave::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Compensatoryleave Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        