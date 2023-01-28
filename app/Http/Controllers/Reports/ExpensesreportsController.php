<?php
        namespace App\Http\Controllers\Reports;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Reports\Expensesreports;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ExpensesreportsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Expensesreports::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.reports.expensesreports.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.expensesreports.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.reports.expensesreports.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.expensesreports.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->expensesreportsName)]);
                Expensesreports::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Expensesreports Created Successfully.'], 200);
                }
                return redirect()->route('reports.expensesreports.index')->with('success','The Expensesreports created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Expensesreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.expensesreports.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.expensesreports.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Expensesreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.expensesreports.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.expensesreports.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Expensesreports::findOrFail($id);
                $request->request->add(['alias' => slugify($request->expensesreportsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Expensesreports updated Successfully.'], 200);
                }
                return redirect()->route('reports.expensesreports.index')->with('success','The Expensesreports updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Expensesreports::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Expensesreports Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Expensesreports::where('status', '<>', -1)->get();
                        return view("omis.reports.expensesreports.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.reports.expensesreports.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Expensesreports::findOrFail($id);
                        return view("omis.reports.expensesreports.ajax.edit", compact('data'))->render();
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
                            $data = Expensesreports::where('status', '<>', -1)->get();
                            $html = view("omis.reports.expensesreports.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Expensesreports::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Expensesreports Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Expensesreports::findOrFail($id);
                            $html = view("omis.reports.expensesreports.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Expensesreports::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Expensesreports updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Expensesreports::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Expensesreports Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        