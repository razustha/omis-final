<?php
        namespace App\Http\Controllers\Recruit;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Recruit\Jobapplication;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class JobapplicationController extends Controller
        {
           public function index(Request $request)
            {
                $data = Jobapplication::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobapplication.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobapplication.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobapplication.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobapplication.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->jobapplicationName)]);
                Jobapplication::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobapplication Created Successfully.'], 200);
                }
                return redirect()->route('recruit.jobapplication.index')->with('success','The Jobapplication created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Jobapplication::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobapplication.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobapplication.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Jobapplication::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobapplication.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobapplication.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Jobapplication::findOrFail($id);
                $request->request->add(['alias' => slugify($request->jobapplicationName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobapplication updated Successfully.'], 200);
                }
                return redirect()->route('recruit.jobapplication.index')->with('success','The Jobapplication updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Jobapplication::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Jobapplication Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Jobapplication::where('status', '<>', -1)->get();
                        return view("omis.recruit.jobapplication.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.recruit.jobapplication.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Jobapplication::findOrFail($id);
                        return view("omis.recruit.jobapplication.ajax.edit", compact('data'))->render();
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
                            $data = Jobapplication::where('status', '<>', -1)->get();
                            $html = view("omis.recruit.jobapplication.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Jobapplication::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Jobapplication Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Jobapplication::findOrFail($id);
                            $html = view("omis.recruit.jobapplication.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Jobapplication::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Jobapplication updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Jobapplication::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Jobapplication Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        