<?php
        namespace App\Http\Controllers\Officemanagement;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Officemanagement\Contract;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ContractController extends Controller
        {
           public function index(Request $request)
            {
                $data = Contract::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.contract.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.contract.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.contract.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.contract.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->contractName)]);
                Contract::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Contract Created Successfully.'], 200);
                }
                return redirect()->route('officemanagement.contract.index')->with('success','The Contract created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Contract::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.contract.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.contract.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Contract::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.contract.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.contract.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Contract::findOrFail($id);
                $request->request->add(['alias' => slugify($request->contractName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Contract updated Successfully.'], 200);
                }
                return redirect()->route('officemanagement.contract.index')->with('success','The Contract updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Contract::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Contract Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Contract::where('status', '<>', -1)->get();
                        return view("omis.officemanagement.contract.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.officemanagement.contract.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Contract::findOrFail($id);
                        return view("omis.officemanagement.contract.ajax.edit", compact('data'))->render();
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
                            $data = Contract::where('status', '<>', -1)->get();
                            $html = view("omis.officemanagement.contract.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Contract::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Contract Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Contract::findOrFail($id);
                            $html = view("omis.officemanagement.contract.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Contract::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Contract updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Contract::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Contract Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        