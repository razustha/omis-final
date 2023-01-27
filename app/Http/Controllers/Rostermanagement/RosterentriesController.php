<?php
        namespace App\Http\Controllers\Rostermanagement;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Rostermanagement\Rosterentries;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class RosterentriesController extends Controller
        {
           public function index(Request $request)
            {
                $data = Rosterentries::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rosterentries.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rosterentries.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rosterentries.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rosterentries.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->rosterentriesName)]);
                Rosterentries::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Rosterentries Created Successfully.'], 200);
                }
                return redirect()->route('rostermanagement.rosterentries.index')->with('success','The Rosterentries created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Rosterentries::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rosterentries.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rosterentries.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Rosterentries::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.rostermanagement.rosterentries.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.rostermanagement.rosterentries.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Rosterentries::findOrFail($id);
                $request->request->add(['alias' => slugify($request->rosterentriesName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Rosterentries updated Successfully.'], 200);
                }
                return redirect()->route('rostermanagement.rosterentries.index')->with('success','The Rosterentries updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Rosterentries::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Rosterentries Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Rosterentries::where('status', '<>', -1)->get();
                        return view("omis.rostermanagement.rosterentries.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.rostermanagement.rosterentries.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Rosterentries::findOrFail($id);
                        return view("omis.rostermanagement.rosterentries.ajax.edit", compact('data'))->render();
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
                            $data = Rosterentries::where('status', '<>', -1)->get();
                            $html = view("omis.rostermanagement.rosterentries.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Rosterentries::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Rosterentries Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Rosterentries::findOrFail($id);
                            $html = view("omis.rostermanagement.rosterentries.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Rosterentries::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Rosterentries updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Rosterentries::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Rosterentries Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        