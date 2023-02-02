<?php
        namespace App\Http\Controllers\Settings;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Settings\Organization;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class OrganizationController extends Controller
        {
           public function index(Request $request)
            {
                $data = Organization::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.settings.organization.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.settings.organization.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.settings.organization.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.settings.organization.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->organizationName)]);
                Organization::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Organization Created Successfully.'], 200);
                }
                return redirect()->route('settings.organization.index')->with('success','The Organization created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Organization::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.settings.organization.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.settings.organization.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Organization::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.settings.organization.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.settings.organization.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Organization::findOrFail($id);
                $request->request->add(['alias' => slugify($request->organizationName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Organization updated Successfully.'], 200);
                }
                return redirect()->route('settings.organization.index')->with('success','The Organization updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Organization::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Organization Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Organization::where('status', '<>', -1)->get();
                        return view("omis.settings.organization.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.settings.organization.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Organization::findOrFail($id);
                        return view("omis.settings.organization.ajax.edit", compact('data'))->render();
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
                            $data = Organization::where('status', '<>', -1)->get();
                            $html = view("omis.settings.organization.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Organization::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Organization Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Organization::findOrFail($id);
                            $html = view("omis.settings.organization.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Organization::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Organization updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Organization::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Organization Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
