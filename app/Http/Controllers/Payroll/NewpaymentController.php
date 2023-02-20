<?php
        namespace App\Http\Controllers\Payroll;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\payroll\Newpayment;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class NewpaymentController extends Controller
        {
           public function index(Request $request)
            {
                $data = Newpayment::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.payroll.newpayment.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.payroll.newpayment.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.payroll.newpayment.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.payroll.newpayment.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->newpaymentName)]);
                Newpayment::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Newpayment Created Successfully.'], 200);
                }
                return redirect()->route('payroll.newpayment.index')->with('success','The Newpayment created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Newpayment::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.payroll.newpayment.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.payroll.newpayment.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Newpayment::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.payroll.newpayment.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.payroll.newpayment.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Newpayment::findOrFail($id);
                $request->request->add(['alias' => slugify($request->newpaymentName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Newpayment updated Successfully.'], 200);
                }
                return redirect()->route('payroll.newpayment.index')->with('success','The Newpayment updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Newpayment::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Newpayment Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Newpayment::where('status', '<>', -1)->get();
                        return view("omis.payroll.newpayment.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.payroll.newpayment.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Newpayment::findOrFail($id);
                        return view("omis.payroll.newpayment.ajax.edit", compact('data'))->render();
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
                            $data = Newpayment::where('status', '<>', -1)->get();
                            $html = view("omis.payroll.newpayment.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Newpayment::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Newpayment Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Newpayment::findOrFail($id);
                            $html = view("omis.payroll.newpayment.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Newpayment::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Newpayment updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Newpayment::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Newpayment Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        