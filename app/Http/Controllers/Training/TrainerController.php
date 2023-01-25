<?php
        namespace App\Http\Controllers\Training;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Training\Trainer;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TrainerController extends Controller
        {
           public function index(Request $request)
            {
                $data = Trainer::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.training.trainer.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainer.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.training.trainer.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainer.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->trainerName)]);
                Trainer::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Trainer Created Successfully.'], 200);
                }
                return redirect()->route('training.trainer.index')->with('success','The Trainer created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Trainer::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.training.trainer.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainer.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Trainer::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.training.trainer.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.training.trainer.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Trainer::findOrFail($id);
                $request->request->add(['alias' => slugify($request->trainerName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Trainer updated Successfully.'], 200);
                }
                return redirect()->route('training.trainer.index')->with('success','The Trainer updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Trainer::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Trainer Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Trainer::where('status', '<>', -1)->get();
                        return view("omis.training.trainer.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.training.trainer.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Trainer::findOrFail($id);
                        return view("omis.training.trainer.ajax.edit", compact('data'))->render();
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
                            $data = Trainer::where('status', '<>', -1)->get();
                            $html = view("omis.training.trainer.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Trainer::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Trainer Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Trainer::findOrFail($id);
                            $html = view("omis.training.trainer.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Trainer::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Trainer updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Trainer::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Trainer Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        