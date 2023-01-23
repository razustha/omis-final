<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Jobtitle;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class JobtitleController extends Controller
        {
           public function index(Request $request)
            {
                $data = Jobtitle::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.jobtitle.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.jobtitle.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.jobtitle.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.jobtitle.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->jobtitleName)]);
                Jobtitle::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobtitle Created Successfully.'], 200);
                }
                return redirect()->route('master.jobtitle.index')->with('success','The Jobtitle created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Jobtitle::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.jobtitle.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.jobtitle.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Jobtitle::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.jobtitle.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.jobtitle.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Jobtitle::findOrFail($id);
                $request->request->add(['alias' => slugify($request->jobtitleName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Jobtitle updated Successfully.'], 200);
                }
                return redirect()->route('master.jobtitle.index')->with('success','The Jobtitle updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Jobtitle::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Jobtitle Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Jobtitle::where('status', '<>', -1)->get();
                        return view("omis.master.jobtitle.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.jobtitle.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Jobtitle::findOrFail($id);
                        return view("omis.master.jobtitle.ajax.edit", compact('data'))->render();
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
                            $data = Jobtitle::where('status', '<>', -1)->get();
                            $html = view("omis.master.jobtitle.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Jobtitle::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Jobtitle Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Jobtitle::findOrFail($id);
                            $html = view("omis.master.jobtitle.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Jobtitle::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Jobtitle updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Jobtitle::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Jobtitle Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        