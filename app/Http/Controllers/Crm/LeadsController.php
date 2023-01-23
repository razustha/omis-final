<?php
        namespace App\Http\Controllers\Crm;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Crm\Leads;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LeadsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Leads::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.crm.leads.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.leads.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.crm.leads.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.leads.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->leadsName)]);
                Leads::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leads Created Successfully.'], 200);
                }
                return redirect()->route('crm.leads.index')->with('success','The Leads created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Leads::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.crm.leads.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.leads.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Leads::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.crm.leads.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.crm.leads.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Leads::findOrFail($id);
                $request->request->add(['alias' => slugify($request->leadsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leads updated Successfully.'], 200);
                }
                return redirect()->route('crm.leads.index')->with('success','The Leads updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Leads::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Leads Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Leads::where('status', '<>', -1)->get();
                        return view("omis.crm.leads.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.crm.leads.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Leads::findOrFail($id);
                        return view("omis.crm.leads.ajax.edit", compact('data'))->render();
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
                            $data = Leads::where('status', '<>', -1)->get();
                            $html = view("omis.crm.leads.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Leads::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Leads Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Leads::findOrFail($id);
                            $html = view("omis.crm.leads.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Leads::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Leads updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Leads::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Leads Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        