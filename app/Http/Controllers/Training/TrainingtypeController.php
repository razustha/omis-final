<?php
        namespace App\Http\Controllers\Training;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Training\Trainingtype;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TrainingtypeController extends Controller
        {
           public function index(Request $request)
            {
                $data = Trainingtype::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.training.trainingtype.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainingtype.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.training.trainingtype.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainingtype.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->trainingtypeName)]);
                Trainingtype::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Trainingtype Created Successfully.'], 200);
                }
                return redirect()->route('training.trainingtype.index')->with('success','The Trainingtype created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Trainingtype::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.training.trainingtype.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainingtype.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Trainingtype::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.training.trainingtype.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainingtype.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Trainingtype::findOrFail($id);
                $request->request->add(['alias' => slugify($request->trainingtypeName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Trainingtype updated Successfully.'], 200);
                }
                return redirect()->route('training.trainingtype.index')->with('success','The Trainingtype updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Trainingtype::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Trainingtype Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Trainingtype::where('status', '<>', -1)->get();
                        return view("omis.training.trainingtype.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.training.trainingtype.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Trainingtype::findOrFail($id);
                        return view("omis.training.trainingtype.ajax.edit", compact('data'))->render();
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
                            $data = Trainingtype::where('status', '<>', -1)->get();
                            $html = view("omis.training.trainingtype.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Trainingtype::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Trainingtype Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Trainingtype::findOrFail($id);
                            $html = view("omis.training.trainingtype.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Trainingtype::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Trainingtype updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Trainingtype::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Trainingtype Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        