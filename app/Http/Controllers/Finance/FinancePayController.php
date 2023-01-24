<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Financepay;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class FinancepayController extends Controller
        {
           public function index(Request $request)
            {
                $data = Financepay::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.financepay.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financepay.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.financepay.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financepay.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->financepayName)]);
                Financepay::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Financepay Created Successfully.'], 200);
                }
                return redirect()->route('finance.financepay.index')->with('success','The Financepay created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Financepay::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.financepay.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financepay.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Financepay::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.financepay.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.financepay.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Financepay::findOrFail($id);
                $request->request->add(['alias' => slugify($request->financepayName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Financepay updated Successfully.'], 200);
                }
                return redirect()->route('finance.financepay.index')->with('success','The Financepay updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Financepay::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Financepay Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Financepay::where('status', '<>', -1)->get();
                        return view("omis.finance.financepay.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.financepay.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Financepay::findOrFail($id);
                        return view("omis.finance.financepay.ajax.edit", compact('data'))->render();
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
                            $data = Financepay::where('status', '<>', -1)->get();
                            $html = view("omis.finance.financepay.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Financepay::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Financepay Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Financepay::findOrFail($id);
                            $html = view("omis.finance.financepay.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Financepay::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Financepay updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Financepay::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Financepay Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        