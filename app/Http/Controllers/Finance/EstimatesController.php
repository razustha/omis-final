<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Estimates;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class EstimatesController extends Controller
        {
           public function index(Request $request)
            {
                $data = Estimates::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.estimates.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.estimates.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.estimates.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.estimates.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->estimatesName)]);
                Estimates::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Estimates Created Successfully.'], 200);
                }
                return redirect()->route('finance.estimates.index')->with('success','The Estimates created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Estimates::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.estimates.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.estimates.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Estimates::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.estimates.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.estimates.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Estimates::findOrFail($id);
                $request->request->add(['alias' => slugify($request->estimatesName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Estimates updated Successfully.'], 200);
                }
                return redirect()->route('finance.estimates.index')->with('success','The Estimates updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Estimates::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Estimates Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Estimates::where('status', '<>', -1)->get();
                        return view("omis.finance.estimates.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.estimates.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Estimates::findOrFail($id);
                        return view("omis.finance.estimates.ajax.edit", compact('data'))->render();
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
                            $data = Estimates::where('status', '<>', -1)->get();
                            $html = view("omis.finance.estimates.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Estimates::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Estimates Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Estimates::findOrFail($id);
                            $html = view("omis.finance.estimates.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Estimates::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Estimates updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Estimates::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Estimates Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        