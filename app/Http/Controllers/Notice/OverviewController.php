<?php
        namespace App\Http\Controllers\Notice;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Notice\Overview;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class OverviewController extends Controller
        {
           public function index(Request $request)
            {
                $data = Overview::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.notice.overview.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.overview.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.notice.overview.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.overview.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->overviewName)]);
                Overview::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Overview Created Successfully.'], 200);
                }
                return redirect()->route('notice.overview.index')->with('success','The Overview created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Overview::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.notice.overview.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.overview.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Overview::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.notice.overview.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.overview.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Overview::findOrFail($id);
                $request->request->add(['alias' => slugify($request->overviewName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Overview updated Successfully.'], 200);
                }
                return redirect()->route('notice.overview.index')->with('success','The Overview updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Overview::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Overview Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Overview::where('status', '<>', -1)->get();
                        return view("omis.notice.overview.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.notice.overview.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Overview::findOrFail($id);
                        return view("omis.notice.overview.ajax.edit", compact('data'))->render();
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
                            $data = Overview::where('status', '<>', -1)->get();
                            $html = view("omis.notice.overview.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Overview::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Overview Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Overview::findOrFail($id);
                            $html = view("omis.notice.overview.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Overview::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Overview updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Overview::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Overview Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        