<?php
        namespace App\Http\Controllers\Eventsandmeetings;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Eventsandmeetings\Event;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class EventController extends Controller
        {
           public function index(Request $request)
            {
                $data = Event::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.event.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.event.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.event.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.event.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->eventName)]);
                Event::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Event Created Successfully.'], 200);
                }
                return redirect()->route('eventsandmeetings.event.index')->with('success','The Event created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Event::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.event.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.event.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Event::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.eventsandmeetings.event.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.eventsandmeetings.event.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Event::findOrFail($id);
                $request->request->add(['alias' => slugify($request->eventName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Event updated Successfully.'], 200);
                }
                return redirect()->route('eventsandmeetings.event.index')->with('success','The Event updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Event::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Event Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Event::where('status', '<>', -1)->get();
                        return view("omis.eventsandmeetings.event.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.eventsandmeetings.event.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Event::findOrFail($id);
                        return view("omis.eventsandmeetings.event.ajax.edit", compact('data'))->render();
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
                            $data = Event::where('status', '<>', -1)->get();
                            $html = view("omis.eventsandmeetings.event.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Event::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Event Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Event::findOrFail($id);
                            $html = view("omis.eventsandmeetings.event.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Event::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Event updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Event::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Event Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        