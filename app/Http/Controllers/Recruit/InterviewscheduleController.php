<?php
        namespace App\Http\Controllers\Recruit;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Recruit\Interviewschedule;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class InterviewscheduleController extends Controller
        {
           public function index(Request $request)
            {
                $data = Interviewschedule::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.recruit.interviewschedule.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.interviewschedule.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.recruit.interviewschedule.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.interviewschedule.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->interviewscheduleName)]);
                Interviewschedule::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Interviewschedule Created Successfully.'], 200);
                }
                return redirect()->route('recruit.interviewschedule.index')->with('success','The Interviewschedule created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Interviewschedule::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.interviewschedule.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.interviewschedule.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Interviewschedule::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.interviewschedule.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.interviewschedule.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Interviewschedule::findOrFail($id);
                $request->request->add(['alias' => slugify($request->interviewscheduleName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Interviewschedule updated Successfully.'], 200);
                }
                return redirect()->route('recruit.interviewschedule.index')->with('success','The Interviewschedule updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Interviewschedule::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Interviewschedule Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Interviewschedule::where('status', '<>', -1)->get();
                        return view("omis.recruit.interviewschedule.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.recruit.interviewschedule.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Interviewschedule::findOrFail($id);
                        return view("omis.recruit.interviewschedule.ajax.edit", compact('data'))->render();
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
                            $data = Interviewschedule::where('status', '<>', -1)->get();
                            $html = view("omis.recruit.interviewschedule.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Interviewschedule::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Interviewschedule Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Interviewschedule::findOrFail($id);
                            $html = view("omis.recruit.interviewschedule.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Interviewschedule::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Interviewschedule updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Interviewschedule::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Interviewschedule Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        