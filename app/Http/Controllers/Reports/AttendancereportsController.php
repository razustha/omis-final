<?php
        namespace App\Http\Controllers\Reports;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Reports\Attendancereports;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AttendancereportsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Attendancereports::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.reports.attendancereports.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.attendancereports.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.reports.attendancereports.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.attendancereports.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->attendancereportsName)]);
                Attendancereports::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Attendancereports Created Successfully.'], 200);
                }
                return redirect()->route('reports.attendancereports.index')->with('success','The Attendancereports created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Attendancereports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.attendancereports.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.attendancereports.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Attendancereports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.attendancereports.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.attendancereports.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Attendancereports::findOrFail($id);
                $request->request->add(['alias' => slugify($request->attendancereportsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Attendancereports updated Successfully.'], 200);
                }
                return redirect()->route('reports.attendancereports.index')->with('success','The Attendancereports updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Attendancereports::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Attendancereports Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Attendancereports::where('status', '<>', -1)->get();
                        return view("omis.reports.attendancereports.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.reports.attendancereports.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Attendancereports::findOrFail($id);
                        return view("omis.reports.attendancereports.ajax.edit", compact('data'))->render();
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
                            $data = Attendancereports::where('status', '<>', -1)->get();
                            $html = view("omis.reports.attendancereports.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Attendancereports::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Attendancereports Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Attendancereports::findOrFail($id);
                            $html = view("omis.reports.attendancereports.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Attendancereports::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Attendancereports updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Attendancereports::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Attendancereports Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        