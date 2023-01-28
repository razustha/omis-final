<?php
        namespace App\Http\Controllers\Reports;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Reports\Taskreports;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TaskreportsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Taskreports::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.reports.taskreports.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.taskreports.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.reports.taskreports.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.taskreports.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->taskreportsName)]);
                Taskreports::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Taskreports Created Successfully.'], 200);
                }
                return redirect()->route('reports.taskreports.index')->with('success','The Taskreports created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Taskreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.taskreports.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.taskreports.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Taskreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.taskreports.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.taskreports.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Taskreports::findOrFail($id);
                $request->request->add(['alias' => slugify($request->taskreportsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Taskreports updated Successfully.'], 200);
                }
                return redirect()->route('reports.taskreports.index')->with('success','The Taskreports updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Taskreports::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Taskreports Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Taskreports::where('status', '<>', -1)->get();
                        return view("omis.reports.taskreports.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.reports.taskreports.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Taskreports::findOrFail($id);
                        return view("omis.reports.taskreports.ajax.edit", compact('data'))->render();
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
                            $data = Taskreports::where('status', '<>', -1)->get();
                            $html = view("omis.reports.taskreports.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Taskreports::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Taskreports Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Taskreports::findOrFail($id);
                            $html = view("omis.reports.taskreports.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Taskreports::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Taskreports updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Taskreports::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Taskreports Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        