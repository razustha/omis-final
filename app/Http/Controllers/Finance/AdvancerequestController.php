<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Advancerequest;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AdvancerequestController extends Controller
        {
           public function index(Request $request)
            {
                $data = Advancerequest::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.advancerequest.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.advancerequest.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.advancerequest.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.advancerequest.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->advancerequestName)]);
                Advancerequest::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Advancerequest Created Successfully.'], 200);
                }
                return redirect()->route('finance.advancerequest.index')->with('success','The Advancerequest created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Advancerequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.advancerequest.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.advancerequest.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Advancerequest::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.advancerequest.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.advancerequest.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Advancerequest::findOrFail($id);
                $request->request->add(['alias' => slugify($request->advancerequestName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Advancerequest updated Successfully.'], 200);
                }
                return redirect()->route('finance.advancerequest.index')->with('success','The Advancerequest updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Advancerequest::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Advancerequest Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Advancerequest::where('status', '<>', -1)->get();
                        return view("omis.finance.advancerequest.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.advancerequest.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Advancerequest::findOrFail($id);
                        return view("omis.finance.advancerequest.ajax.edit", compact('data'))->render();
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
                            $data = Advancerequest::where('status', '<>', -1)->get();
                            $html = view("omis.finance.advancerequest.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Advancerequest::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Advancerequest Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Advancerequest::findOrFail($id);
                            $html = view("omis.finance.advancerequest.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Advancerequest::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Advancerequest updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Advancerequest::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Advancerequest Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        