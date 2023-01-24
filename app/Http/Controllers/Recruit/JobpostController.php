<?php
        namespace App\Http\Controllers\Recruit;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Recruit\Jobpost;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class JobpostController extends Controller
        {
           public function index(Request $request)
            {
                $data = Jobpost::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobpost.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobpost.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobpost.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobpost.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->jobpostName)]);
                Jobpost::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobpost Created Successfully.'], 200);
                }
                return redirect()->route('recruit.jobpost.index')->with('success','The Jobpost created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Jobpost::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobpost.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobpost.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Jobpost::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobpost.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobpost.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Jobpost::findOrFail($id);
                $request->request->add(['alias' => slugify($request->jobpostName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobpost updated Successfully.'], 200);
                }
                return redirect()->route('recruit.jobpost.index')->with('success','The Jobpost updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Jobpost::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Jobpost Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Jobpost::where('status', '<>', -1)->get();
                        return view("omis.recruit.jobpost.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.recruit.jobpost.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Jobpost::findOrFail($id);
                        return view("omis.recruit.jobpost.ajax.edit", compact('data'))->render();
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
                            $data = Jobpost::where('status', '<>', -1)->get();
                            $html = view("omis.recruit.jobpost.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Jobpost::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Jobpost Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Jobpost::findOrFail($id);
                            $html = view("omis.recruit.jobpost.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Jobpost::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Jobpost updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Jobpost::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Jobpost Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        