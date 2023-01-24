<?php
        namespace App\Http\Controllers\Notice;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Notice\Detailsview;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class DetailsviewController extends Controller
        {
           public function index(Request $request)
            {
                $data = Detailsview::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.notice.detailsview.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.detailsview.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.notice.detailsview.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.detailsview.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->detailsviewName)]);
                Detailsview::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Detailsview Created Successfully.'], 200);
                }
                return redirect()->route('notice.detailsview.index')->with('success','The Detailsview created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Detailsview::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.notice.detailsview.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.detailsview.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Detailsview::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.notice.detailsview.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.detailsview.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Detailsview::findOrFail($id);
                $request->request->add(['alias' => slugify($request->detailsviewName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Detailsview updated Successfully.'], 200);
                }
                return redirect()->route('notice.detailsview.index')->with('success','The Detailsview updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Detailsview::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Detailsview Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Detailsview::where('status', '<>', -1)->get();
                        return view("omis.notice.detailsview.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.notice.detailsview.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Detailsview::findOrFail($id);
                        return view("omis.notice.detailsview.ajax.edit", compact('data'))->render();
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
                            $data = Detailsview::where('status', '<>', -1)->get();
                            $html = view("omis.notice.detailsview.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Detailsview::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Detailsview Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Detailsview::findOrFail($id);
                            $html = view("omis.notice.detailsview.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Detailsview::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Detailsview updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Detailsview::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Detailsview Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        