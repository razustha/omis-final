<?php
        namespace App\Http\Controllers\Notice;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Notice\Announcement;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class AnnouncementController extends Controller
        {
           public function index(Request $request)
            {
                $data = Announcement::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.notice.announcement.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.announcement.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.notice.announcement.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.announcement.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->announcementName)]);
                Announcement::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Announcement Created Successfully.'], 200);
                }
                return redirect()->route('notice.announcement.index')->with('success','The Announcement created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Announcement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.notice.announcement.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.announcement.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Announcement::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.notice.announcement.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.notice.announcement.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Announcement::findOrFail($id);
                $request->request->add(['alias' => slugify($request->announcementName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Announcement updated Successfully.'], 200);
                }
                return redirect()->route('notice.announcement.index')->with('success','The Announcement updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Announcement::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Announcement Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Announcement::where('status', '<>', -1)->get();
                        return view("omis.notice.announcement.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.notice.announcement.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Announcement::findOrFail($id);
                        return view("omis.notice.announcement.ajax.edit", compact('data'))->render();
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
                            $data = Announcement::where('status', '<>', -1)->get();
                            $html = view("omis.notice.announcement.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Announcement::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Announcement Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Announcement::findOrFail($id);
                            $html = view("omis.notice.announcement.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Announcement::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Announcement updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Announcement::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Announcement Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        