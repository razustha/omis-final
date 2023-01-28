<?php
        namespace App\Http\Controllers\Recruit;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Recruit\Experienceletter;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ExperienceletterController extends Controller
        {
           public function index(Request $request)
            {
                $data = Experienceletter::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.recruit.experienceletter.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.experienceletter.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.recruit.experienceletter.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.experienceletter.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->experienceletterName)]);
                Experienceletter::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Experienceletter Created Successfully.'], 200);
                }
                return redirect()->route('recruit.experienceletter.index')->with('success','The Experienceletter created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Experienceletter::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.experienceletter.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.experienceletter.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Experienceletter::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.experienceletter.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.experienceletter.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Experienceletter::findOrFail($id);
                $request->request->add(['alias' => slugify($request->experienceletterName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Experienceletter updated Successfully.'], 200);
                }
                return redirect()->route('recruit.experienceletter.index')->with('success','The Experienceletter updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Experienceletter::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Experienceletter Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Experienceletter::where('status', '<>', -1)->get();
                        return view("omis.recruit.experienceletter.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.recruit.experienceletter.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Experienceletter::findOrFail($id);
                        return view("omis.recruit.experienceletter.ajax.edit", compact('data'))->render();
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
                            $data = Experienceletter::where('status', '<>', -1)->get();
                            $html = view("omis.recruit.experienceletter.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Experienceletter::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Experienceletter Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Experienceletter::findOrFail($id);
                            $html = view("omis.recruit.experienceletter.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Experienceletter::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Experienceletter updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Experienceletter::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Experienceletter Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        