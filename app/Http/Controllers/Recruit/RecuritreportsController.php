<?php
        namespace App\Http\Controllers\Recruit;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Recruit\Recuritreports;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class RecuritreportsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Recuritreports::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.recruit.recuritreports.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.recuritreports.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.recruit.recuritreports.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.recuritreports.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->recuritreportsName)]);
                Recuritreports::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Recuritreports Created Successfully.'], 200);
                }
                return redirect()->route('recruit.recuritreports.index')->with('success','The Recuritreports created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Recuritreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.recuritreports.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.recuritreports.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Recuritreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.recuritreports.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.recuritreports.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Recuritreports::findOrFail($id);
                $request->request->add(['alias' => slugify($request->recuritreportsName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Recuritreports updated Successfully.'], 200);
                }
                return redirect()->route('recruit.recuritreports.index')->with('success','The Recuritreports updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Recuritreports::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Recuritreports Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Recuritreports::where('status', '<>', -1)->get();
                        return view("omis.recruit.recuritreports.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.recruit.recuritreports.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Recuritreports::findOrFail($id);
                        return view("omis.recruit.recuritreports.ajax.edit", compact('data'))->render();
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
                            $data = Recuritreports::where('status', '<>', -1)->get();
                            $html = view("omis.recruit.recuritreports.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Recuritreports::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Recuritreports Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Recuritreports::findOrFail($id);
                            $html = view("omis.recruit.recuritreports.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Recuritreports::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Recuritreports updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Recuritreports::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Recuritreports Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        