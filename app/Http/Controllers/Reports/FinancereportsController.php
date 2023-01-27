<?php
        namespace App\Http\Controllers\Reports;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Reports\Financereports;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FinancereportsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Financereports::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.reports.financereports.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.financereports.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.reports.financereports.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.financereports.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->financereportsName)]);
                Financereports::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Financereports Created Successfully.'], 200);
                }
                return redirect()->route('reports.financereports.index')->with('success','The Financereports created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Financereports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.financereports.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.financereports.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Financereports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.financereports.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.financereports.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Financereports::findOrFail($id);
                $request->request->add(['alias' => slugify($request->financereportsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Financereports updated Successfully.'], 200);
                }
                return redirect()->route('reports.financereports.index')->with('success','The Financereports updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Financereports::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Financereports Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Financereports::where('status', '<>', -1)->get();
                        return view("omis.reports.financereports.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.reports.financereports.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Financereports::findOrFail($id);
                        return view("omis.reports.financereports.ajax.edit", compact('data'))->render();
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
                            $data = Financereports::where('status', '<>', -1)->get();
                            $html = view("omis.reports.financereports.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Financereports::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Financereports Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Financereports::findOrFail($id);
                            $html = view("omis.reports.financereports.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Financereports::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Financereports updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Financereports::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Financereports Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        