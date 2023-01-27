<?php
        namespace App\Http\Controllers\Officemanagement;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Officemanagement\Generatorlogbook;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class GeneratorlogbookController extends Controller
        {
           public function index(Request $request)
            {
                $data = Generatorlogbook::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.generatorlogbook.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.generatorlogbook.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.generatorlogbook.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.generatorlogbook.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->generatorlogbookName)]);
                Generatorlogbook::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Generatorlogbook Created Successfully.'], 200);
                }
                return redirect()->route('officemanagement.generatorlogbook.index')->with('success','The Generatorlogbook created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Generatorlogbook::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.generatorlogbook.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.generatorlogbook.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Generatorlogbook::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.officemanagement.generatorlogbook.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.officemanagement.generatorlogbook.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Generatorlogbook::findOrFail($id);
                $request->request->add(['alias' => slugify($request->generatorlogbookName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Generatorlogbook updated Successfully.'], 200);
                }
                return redirect()->route('officemanagement.generatorlogbook.index')->with('success','The Generatorlogbook updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Generatorlogbook::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Generatorlogbook Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Generatorlogbook::where('status', '<>', -1)->get();
                        return view("omis.officemanagement.generatorlogbook.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.officemanagement.generatorlogbook.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Generatorlogbook::findOrFail($id);
                        return view("omis.officemanagement.generatorlogbook.ajax.edit", compact('data'))->render();
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
                            $data = Generatorlogbook::where('status', '<>', -1)->get();
                            $html = view("omis.officemanagement.generatorlogbook.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Generatorlogbook::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Generatorlogbook Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Generatorlogbook::findOrFail($id);
                            $html = view("omis.officemanagement.generatorlogbook.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Generatorlogbook::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Generatorlogbook updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Generatorlogbook::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Generatorlogbook Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        