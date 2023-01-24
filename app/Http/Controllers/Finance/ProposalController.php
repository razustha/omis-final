<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Proposal;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ProposalController extends Controller
        {
           public function index(Request $request)
            {
                $data = Proposal::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.proposal.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.proposal.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.proposal.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.proposal.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->proposalName)]);
                Proposal::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Proposal Created Successfully.'], 200);
                }
                return redirect()->route('finance.proposal.index')->with('success','The Proposal created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Proposal::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.proposal.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.proposal.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Proposal::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.proposal.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.proposal.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Proposal::findOrFail($id);
                $request->request->add(['alias' => slugify($request->proposalName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Proposal updated Successfully.'], 200);
                }
                return redirect()->route('finance.proposal.index')->with('success','The Proposal updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Proposal::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Proposal Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Proposal::where('status', '<>', -1)->get();
                        return view("omis.finance.proposal.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.proposal.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Proposal::findOrFail($id);
                        return view("omis.finance.proposal.ajax.edit", compact('data'))->render();
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
                            $data = Proposal::where('status', '<>', -1)->get();
                            $html = view("omis.finance.proposal.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Proposal::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Proposal Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Proposal::findOrFail($id);
                            $html = view("omis.finance.proposal.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Proposal::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Proposal updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Proposal::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Proposal Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        