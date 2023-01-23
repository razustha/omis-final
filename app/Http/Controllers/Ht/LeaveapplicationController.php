<?php
        namespace App\Http\Controllers\Ht;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Ht\Leaveapplication;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LeaveapplicationController extends Controller
        {
           public function index(Request $request)
            {
                $data = Leaveapplication::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.ht.leaveapplication.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.ht.leaveapplication.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.ht.leaveapplication.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.ht.leaveapplication.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
                Leaveapplication::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leaveapplication Created Successfully.'], 200);
                }
                return redirect()->route('ht.leaveapplication.index')->with('success','The Leaveapplication created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Leaveapplication::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.ht.leaveapplication.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.ht.leaveapplication.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Leaveapplication::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.ht.leaveapplication.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.ht.leaveapplication.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Leaveapplication::findOrFail($id);
                $request->request->add(['alias' => slugify($request->leaveapplicationName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leaveapplication updated Successfully.'], 200);
                }
                return redirect()->route('ht.leaveapplication.index')->with('success','The Leaveapplication updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Leaveapplication::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Leaveapplication Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Leaveapplication::where('status', '<>', -1)->get();
                        return view("omis.ht.leaveapplication.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.ht.leaveapplication.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Leaveapplication::findOrFail($id);
                        return view("omis.ht.leaveapplication.ajax.edit", compact('data'))->render();
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
                            $data = Leaveapplication::where('status', '<>', -1)->get();
                            $html = view("omis.ht.leaveapplication.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Leaveapplication::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Leaveapplication Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Leaveapplication::findOrFail($id);
                            $html = view("omis.ht.leaveapplication.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Leaveapplication::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Leaveapplication updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Leaveapplication::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Leaveapplication Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        