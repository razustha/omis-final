<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Financeexpenses;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FinanceexpensesController extends Controller
        {
           public function index(Request $request)
            {
                $data = Financeexpenses::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.financeexpenses.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financeexpenses.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.financeexpenses.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financeexpenses.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->financeexpensesName)]);
                Financeexpenses::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Financeexpenses Created Successfully.'], 200);
                }
                return redirect()->route('finance.financeexpenses.index')->with('success','The Financeexpenses created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Financeexpenses::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.financeexpenses.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financeexpenses.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Financeexpenses::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.financeexpenses.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financeexpenses.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Financeexpenses::findOrFail($id);
                $request->request->add(['alias' => slugify($request->financeexpensesName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Financeexpenses updated Successfully.'], 200);
                }
                return redirect()->route('finance.financeexpenses.index')->with('success','The Financeexpenses updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Financeexpenses::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Financeexpenses Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Financeexpenses::where('status', '<>', -1)->get();
                        return view("omis.finance.financeexpenses.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.financeexpenses.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Financeexpenses::findOrFail($id);
                        return view("omis.finance.financeexpenses.ajax.edit", compact('data'))->render();
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
                            $data = Financeexpenses::where('status', '<>', -1)->get();
                            $html = view("omis.finance.financeexpenses.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Financeexpenses::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Financeexpenses Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Financeexpenses::findOrFail($id);
                            $html = view("omis.finance.financeexpenses.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Financeexpenses::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Financeexpenses updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Financeexpenses::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Financeexpenses Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        