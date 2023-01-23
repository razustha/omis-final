<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Employeementtimeline;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class EmployeementtimelineController extends Controller
        {
           public function index(Request $request)
            {
                $data = Employeementtimeline::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->employeementtimelineName)]);
                Employeementtimeline::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Employeementtimeline Created Successfully.'], 200);
                }
                return redirect()->route('hr.employeementtimeline.index')->with('success','The Employeementtimeline created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Employeementtimeline::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Employeementtimeline::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.employeementtimeline.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.employeementtimeline.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Employeementtimeline::findOrFail($id);
                $request->request->add(['alias' => slugify($request->employeementtimelineName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Employeementtimeline updated Successfully.'], 200);
                }
                return redirect()->route('hr.employeementtimeline.index')->with('success','The Employeementtimeline updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Employeementtimeline::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Employeementtimeline Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Employeementtimeline::where('status', '<>', -1)->get();
                        return view("omis.hr.employeementtimeline.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.employeementtimeline.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Employeementtimeline::findOrFail($id);
                        return view("omis.hr.employeementtimeline.ajax.edit", compact('data'))->render();
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
                            $data = Employeementtimeline::where('status', '<>', -1)->get();
                            $html = view("omis.hr.employeementtimeline.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Employeementtimeline::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Employeementtimeline Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Employeementtimeline::findOrFail($id);
                            $html = view("omis.hr.employeementtimeline.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Employeementtimeline::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Employeementtimeline updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Employeementtimeline::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Employeementtimeline Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        