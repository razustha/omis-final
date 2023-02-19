<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Nationality;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class NationalityController extends Controller
        {
           public function index(Request $request)
            {
                $data = Nationality::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.nationality.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.nationality.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.nationality.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.nationality.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                        'nationalityName' => 'required'
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->nationalityName)]);
                Nationality::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Nationality Created Successfully.'], 200);
                }
                return redirect()->route('master.nationality.index')->with('success','The Nationality created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Nationality::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.nationality.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.nationality.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Nationality::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.nationality.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.nationality.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $validator = Validator::make($request->all(), [
                    'nationalityName' => 'required'
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'error' => $validator->errors()->all(),
                ]);
            }
            
                $data = Nationality::findOrFail($id);
                $request->request->add(['alias' => slugify($request->nationalityName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Nationality updated Successfully.'], 200);
                }
                return redirect()->route('master.nationality.index')->with('success','The Nationality updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Nationality::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Nationality Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Nationality::where('status', '<>', -1)->get();
                        return view("omis.master.nationality.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.nationality.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Nationality::findOrFail($id);
                        return view("omis.master.nationality.ajax.edit", compact('data'))->render();
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
                            $data = Nationality::where('status', '<>', -1)->get();
                            $html = view("omis.master.nationality.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Nationality::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Nationality Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Nationality::findOrFail($id);
                            $html = view("omis.master.nationality.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Nationality::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Nationality updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Nationality::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Nationality Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        