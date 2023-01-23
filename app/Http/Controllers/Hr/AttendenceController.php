<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Attendence;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AttendenceController extends Controller
        {
           public function index(Request $request)
            {
                $data = Attendence::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->attendenceName)]);
                Attendence::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Attendence Created Successfully.'], 200);
                }
                return redirect()->route('hr.attendence.index')->with('success','The Attendence created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Attendence::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Attendence::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.attendence.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.attendence.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Attendence::findOrFail($id);
                $request->request->add(['alias' => slugify($request->attendenceName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Attendence updated Successfully.'], 200);
                }
                return redirect()->route('hr.attendence.index')->with('success','The Attendence updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Attendence::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Attendence Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Attendence::where('status', '<>', -1)->get();
                        return view("omis.hr.attendence.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.attendence.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Attendence::findOrFail($id);
                        return view("omis.hr.attendence.ajax.edit", compact('data'))->render();
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
                            $data = Attendence::where('status', '<>', -1)->get();
                            $html = view("omis.hr.attendence.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Attendence::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Attendence Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Attendence::findOrFail($id);
                            $html = view("omis.hr.attendence.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Attendence::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Attendence updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Attendence::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Attendence Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        