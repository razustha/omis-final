<?php
        namespace App\Http\Controllers\Recruit;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Recruit\Jobinterview;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class JobinterviewController extends Controller
        {
           public function index(Request $request)
            {
                $data = Jobinterview::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobinterview.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobinterview.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobinterview.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobinterview.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->jobinterviewName)]);
                Jobinterview::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobinterview Created Successfully.'], 200);
                }
                return redirect()->route('recruit.jobinterview.index')->with('success','The Jobinterview created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Jobinterview::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobinterview.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobinterview.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Jobinterview::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.jobinterview.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.jobinterview.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Jobinterview::findOrFail($id);
                $request->request->add(['alias' => slugify($request->jobinterviewName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobinterview updated Successfully.'], 200);
                }
                return redirect()->route('recruit.jobinterview.index')->with('success','The Jobinterview updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Jobinterview::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Jobinterview Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Jobinterview::where('status', '<>', -1)->get();
                        return view("omis.recruit.jobinterview.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.recruit.jobinterview.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Jobinterview::findOrFail($id);
                        return view("omis.recruit.jobinterview.ajax.edit", compact('data'))->render();
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
                            $data = Jobinterview::where('status', '<>', -1)->get();
                            $html = view("omis.recruit.jobinterview.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Jobinterview::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Jobinterview Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Jobinterview::findOrFail($id);
                            $html = view("omis.recruit.jobinterview.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Jobinterview::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Jobinterview updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Jobinterview::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Jobinterview Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        