<?php
        namespace App\Http\Controllers\Requisition;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Requisition\Travel;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class TravelController extends Controller
        {
           public function index(Request $request)
            {
                $data = Travel::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.requisition.travel.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.travel.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.requisition.travel.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.travel.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->travelName)]);
                Travel::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travel Created Successfully.'], 200);
                }
                return redirect()->route('requisition.travel.index')->with('success','The Travel created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Travel::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.travel.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.travel.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Travel::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.requisition.travel.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.requisition.travel.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Travel::findOrFail($id);
                $request->request->add(['alias' => slugify($request->travelName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travel updated Successfully.'], 200);
                }
                return redirect()->route('requisition.travel.index')->with('success','The Travel updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Travel::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Travel Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Travel::where('status', '<>', -1)->get();
                        return view("omis.requisition.travel.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.requisition.travel.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Travel::findOrFail($id);
                        return view("omis.requisition.travel.ajax.edit", compact('data'))->render();
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
                            $data = Travel::where('status', '<>', -1)->get();
                            $html = view("omis.requisition.travel.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Travel::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Travel Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Travel::findOrFail($id);
                            $html = view("omis.requisition.travel.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Travel::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Travel updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Travel::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Travel Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        