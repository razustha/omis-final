<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\State;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class StateController extends Controller
        {
           public function index(Request $request)
            {
                $data = State::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.state.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.state.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.state.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.state.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->stateName)]);
                State::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The State Created Successfully.'], 200);
                }
                return redirect()->route('master.state.index')->with('success','The State created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = State::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.state.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.state.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = State::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.state.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.state.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = State::findOrFail($id);
                $request->request->add(['alias' => slugify($request->stateName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The State updated Successfully.'], 200);
                }
                return redirect()->route('master.state.index')->with('success','The State updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = State::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The State Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = State::where('status', '<>', -1)->get();
                        return view("omis.master.state.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.state.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = State::findOrFail($id);
                        return view("omis.master.state.ajax.edit", compact('data'))->render();
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
                            $data = State::where('status', '<>', -1)->get();
                            $html = view("omis.master.state.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            State::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The State Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = State::findOrFail($id);
                            $html = view("omis.master.state.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = State::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The State updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = State::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The State Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }

            public function getState(Request $request)
            {
                $country_id = $request->country_id;
                $states = State::where('country_id',$country_id)->get();
                return response()->json(['status'=>200, 'message'=>$states]);
            }
        }
