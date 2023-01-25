<?php
        namespace App\Http\Controllers\Eventsandmeetings;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Eventsandmeetings\Meeting;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class MeetingController extends Controller
        {
           public function index(Request $request)
            {
                $data = Meeting::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.meeting.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.meeting.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.meeting.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.meeting.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->meetingName)]);
                Meeting::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Meeting Created Successfully.'], 200);
                }
                return redirect()->route('eventsandmeetings.meeting.index')->with('success','The Meeting created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Meeting::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.meeting.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.meeting.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Meeting::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.meeting.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.meeting.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Meeting::findOrFail($id);
                $request->request->add(['alias' => slugify($request->meetingName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Meeting updated Successfully.'], 200);
                }
                return redirect()->route('eventsandmeetings.meeting.index')->with('success','The Meeting updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Meeting::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Meeting Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Meeting::where('status', '<>', -1)->get();
                        return view("omis.eventsandmeetings.meeting.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.eventsandmeetings.meeting.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Meeting::findOrFail($id);
                        return view("omis.eventsandmeetings.meeting.ajax.edit", compact('data'))->render();
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
                            $data = Meeting::where('status', '<>', -1)->get();
                            $html = view("omis.eventsandmeetings.meeting.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Meeting::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Meeting Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Meeting::findOrFail($id);
                            $html = view("omis.eventsandmeetings.meeting.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Meeting::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Meeting updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Meeting::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Meeting Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        