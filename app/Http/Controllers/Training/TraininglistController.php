<?php
        namespace App\Http\Controllers\Training;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Training\Traininglist;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TraininglistController extends Controller
        {
           public function index(Request $request)
            {
                $data = Traininglist::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.training.traininglist.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.traininglist.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.training.traininglist.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.traininglist.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->traininglistName)]);
                Traininglist::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Traininglist Created Successfully.'], 200);
                }
                return redirect()->route('training.traininglist.index')->with('success','The Traininglist created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Traininglist::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.training.traininglist.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.traininglist.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Traininglist::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.training.traininglist.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.traininglist.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Traininglist::findOrFail($id);
                $request->request->add(['alias' => slugify($request->traininglistName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Traininglist updated Successfully.'], 200);
                }
                return redirect()->route('training.traininglist.index')->with('success','The Traininglist updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Traininglist::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Traininglist Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Traininglist::where('status', '<>', -1)->get();
                        return view("omis.training.traininglist.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.training.traininglist.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Traininglist::findOrFail($id);
                        return view("omis.training.traininglist.ajax.edit", compact('data'))->render();
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
                            $data = Traininglist::where('status', '<>', -1)->get();
                            $html = view("omis.training.traininglist.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Traininglist::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Traininglist Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Traininglist::findOrFail($id);
                            $html = view("omis.training.traininglist.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Traininglist::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Traininglist updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Traininglist::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Traininglist Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        