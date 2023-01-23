<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Shiftroster;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class ShiftrosterController extends Controller
        {
           public function index(Request $request)
            {
                $data = Shiftroster::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->shiftrosterName)]);
                Shiftroster::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Shiftroster Created Successfully.'], 200);
                }
                return redirect()->route('hr.shiftroster.index')->with('success','The Shiftroster created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Shiftroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Shiftroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Shiftroster::findOrFail($id);
                $request->request->add(['alias' => slugify($request->shiftrosterName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Shiftroster updated Successfully.'], 200);
                }
                return redirect()->route('hr.shiftroster.index')->with('success','The Shiftroster updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Shiftroster::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Shiftroster Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Shiftroster::where('status', '<>', -1)->get();
                        return view("omis.hr.shiftroster.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.shiftroster.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Shiftroster::findOrFail($id);
                        return view("omis.hr.shiftroster.ajax.edit", compact('data'))->render();
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
                            $data = Shiftroster::where('status', '<>', -1)->get();
                            $html = view("omis.hr.shiftroster.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Shiftroster::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Shiftroster Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Shiftroster::findOrFail($id);
                            $html = view("omis.hr.shiftroster.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Shiftroster::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Shiftroster updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Shiftroster::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Shiftroster Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        