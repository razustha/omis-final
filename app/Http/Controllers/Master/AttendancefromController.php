<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Attendancefrom;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AttendancefromController extends Controller
        {
           public function index(Request $request)
            {
                $data = Attendancefrom::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.attendancefrom.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.attendancefrom.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.attendancefrom.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.attendancefrom.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->attendancefromName)]);
                Attendancefrom::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Attendancefrom Created Successfully.'], 200);
                }
                return redirect()->route('master.attendancefrom.index')->with('success','The Attendancefrom created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Attendancefrom::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.attendancefrom.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.attendancefrom.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Attendancefrom::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.attendancefrom.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.attendancefrom.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Attendancefrom::findOrFail($id);
                $request->request->add(['alias' => slugify($request->attendancefromName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Attendancefrom updated Successfully.'], 200);
                }
                return redirect()->route('master.attendancefrom.index')->with('success','The Attendancefrom updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Attendancefrom::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Attendancefrom Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Attendancefrom::where('status', '<>', -1)->get();
                        return view("omis.master.attendancefrom.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.attendancefrom.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Attendancefrom::findOrFail($id);
                        return view("omis.master.attendancefrom.ajax.edit", compact('data'))->render();
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
                            $data = Attendancefrom::where('status', '<>', -1)->get();
                            $html = view("omis.master.attendancefrom.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Attendancefrom::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Attendancefrom Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Attendancefrom::findOrFail($id);
                            $html = view("omis.master.attendancefrom.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Attendancefrom::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Attendancefrom updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Attendancefrom::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Attendancefrom Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        