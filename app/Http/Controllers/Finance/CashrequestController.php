<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Cashrequest;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class CashrequestController extends Controller
        {
           public function index(Request $request)
            {
                $data = Cashrequest::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.cashrequest.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.cashrequest.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.cashrequest.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.cashrequest.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->cashrequestName)]);
                Cashrequest::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Cashrequest Created Successfully.'], 200);
                }
                return redirect()->route('finance.cashrequest.index')->with('success','The Cashrequest created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Cashrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.cashrequest.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.cashrequest.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Cashrequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.cashrequest.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.cashrequest.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Cashrequest::findOrFail($id);
                $request->request->add(['alias' => slugify($request->cashrequestName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Cashrequest updated Successfully.'], 200);
                }
                return redirect()->route('finance.cashrequest.index')->with('success','The Cashrequest updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Cashrequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Cashrequest Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Cashrequest::where('status', '<>', -1)->get();
                        return view("omis.finance.cashrequest.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.cashrequest.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Cashrequest::findOrFail($id);
                        return view("omis.finance.cashrequest.ajax.edit", compact('data'))->render();
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
                            $data = Cashrequest::where('status', '<>', -1)->get();
                            $html = view("omis.finance.cashrequest.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Cashrequest::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Cashrequest Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Cashrequest::findOrFail($id);
                            $html = view("omis.finance.cashrequest.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Cashrequest::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Cashrequest updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Cashrequest::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Cashrequest Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        