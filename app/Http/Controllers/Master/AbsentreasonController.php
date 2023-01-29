<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Absentreason;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AbsentreasonController extends Controller
        {
           public function index(Request $request)
            {
                $data = Absentreason::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.absentreason.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.absentreason.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.absentreason.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.absentreason.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->absentreasonName)]);
                Absentreason::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Absentreason Created Successfully.'], 200);
                }
                return redirect()->route('master.absentreason.index')->with('success','The Absentreason created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Absentreason::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.absentreason.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.absentreason.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Absentreason::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.absentreason.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.absentreason.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Absentreason::findOrFail($id);
                $request->request->add(['alias' => slugify($request->absentreasonName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Absentreason updated Successfully.'], 200);
                }
                return redirect()->route('master.absentreason.index')->with('success','The Absentreason updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Absentreason::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Absentreason Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Absentreason::where('status', '<>', -1)->get();
                        return view("omis.master.absentreason.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.absentreason.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Absentreason::findOrFail($id);
                        return view("omis.master.absentreason.ajax.edit", compact('data'))->render();
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
                            $data = Absentreason::where('status', '<>', -1)->get();
                            $html = view("omis.master.absentreason.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Absentreason::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Absentreason Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Absentreason::findOrFail($id);
                            $html = view("omis.master.absentreason.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Absentreason::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Absentreason updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Absentreason::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Absentreason Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        