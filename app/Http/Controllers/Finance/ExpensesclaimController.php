<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Expensesclaim;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ExpensesclaimController extends Controller
        {
           public function index(Request $request)
            {
                $data = Expensesclaim::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.expensesclaim.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.expensesclaim.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.expensesclaim.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.expensesclaim.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->expensesclaimName)]);
                Expensesclaim::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Expensesclaim Created Successfully.'], 200);
                }
                return redirect()->route('finance.expensesclaim.index')->with('success','The Expensesclaim created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Expensesclaim::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.expensesclaim.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.expensesclaim.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Expensesclaim::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.expensesclaim.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.expensesclaim.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Expensesclaim::findOrFail($id);
                $request->request->add(['alias' => slugify($request->expensesclaimName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Expensesclaim updated Successfully.'], 200);
                }
                return redirect()->route('finance.expensesclaim.index')->with('success','The Expensesclaim updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Expensesclaim::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Expensesclaim Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Expensesclaim::where('status', '<>', -1)->get();
                        return view("omis.finance.expensesclaim.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.expensesclaim.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Expensesclaim::findOrFail($id);
                        return view("omis.finance.expensesclaim.ajax.edit", compact('data'))->render();
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
                            $data = Expensesclaim::where('status', '<>', -1)->get();
                            $html = view("omis.finance.expensesclaim.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Expensesclaim::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Expensesclaim Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Expensesclaim::findOrFail($id);
                            $html = view("omis.finance.expensesclaim.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Expensesclaim::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Expensesclaim updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Expensesclaim::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Expensesclaim Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        