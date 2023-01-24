<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Invoices;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class InvoicesController extends Controller
        {
           public function index(Request $request)
            {
                $data = Invoices::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.invoices.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.invoices.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.invoices.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.invoices.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->invoicesName)]);
                Invoices::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Invoices Created Successfully.'], 200);
                }
                return redirect()->route('finance.invoices.index')->with('success','The Invoices created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Invoices::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.invoices.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.invoices.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Invoices::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.invoices.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.invoices.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Invoices::findOrFail($id);
                $request->request->add(['alias' => slugify($request->invoicesName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Invoices updated Successfully.'], 200);
                }
                return redirect()->route('finance.invoices.index')->with('success','The Invoices updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Invoices::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Invoices Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Invoices::where('status', '<>', -1)->get();
                        return view("omis.finance.invoices.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.invoices.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Invoices::findOrFail($id);
                        return view("omis.finance.invoices.ajax.edit", compact('data'))->render();
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
                            $data = Invoices::where('status', '<>', -1)->get();
                            $html = view("omis.finance.invoices.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Invoices::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Invoices Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Invoices::findOrFail($id);
                            $html = view("omis.finance.invoices.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Invoices::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Invoices updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Invoices::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Invoices Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        