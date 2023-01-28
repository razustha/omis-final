<?php
        namespace App\Http\Controllers\Reports;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Reports\Leavereports;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LeavereportsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Leavereports::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.reports.leavereports.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.leavereports.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.reports.leavereports.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.leavereports.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->leavereportsName)]);
                Leavereports::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leavereports Created Successfully.'], 200);
                }
                return redirect()->route('reports.leavereports.index')->with('success','The Leavereports created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Leavereports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.leavereports.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.leavereports.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Leavereports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.leavereports.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.leavereports.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Leavereports::findOrFail($id);
                $request->request->add(['alias' => slugify($request->leavereportsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leavereports updated Successfully.'], 200);
                }
                return redirect()->route('reports.leavereports.index')->with('success','The Leavereports updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Leavereports::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Leavereports Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Leavereports::where('status', '<>', -1)->get();
                        return view("omis.reports.leavereports.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.reports.leavereports.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Leavereports::findOrFail($id);
                        return view("omis.reports.leavereports.ajax.edit", compact('data'))->render();
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
                            $data = Leavereports::where('status', '<>', -1)->get();
                            $html = view("omis.reports.leavereports.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Leavereports::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Leavereports Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Leavereports::findOrFail($id);
                            $html = view("omis.reports.leavereports.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Leavereports::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Leavereports updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Leavereports::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Leavereports Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        