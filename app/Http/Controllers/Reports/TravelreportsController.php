<?php
        namespace App\Http\Controllers\Reports;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Reports\Travelreports;
        use Illuminate\Support\Facades\DB;
        class TravelreportsController extends Controller
        {
           public function index(Request $request)
            {
                $data = Travelreports::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.reports.travelreports.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.travelreports.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.reports.travelreports.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.travelreports.create");
            }

            public function store(Request $request)
            {
                Travelreports::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelreports Created Successfully.'], 200);
                }
                return redirect()->route('reports.travelreports.index')->with('success','The Travelreports created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Travelreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.travelreports.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.travelreports.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Travelreports::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.reports.travelreports.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.reports.travelreports.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Travelreports::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Travelreports updated Successfully.'], 200);
                }
                return redirect()->route('reports.travelreports.index')->with('success','The Travelreports updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Travelreports::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Travelreports Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Travelreports::where('status', '<>', -1)->get();
                        return view("omis.reports.travelreports.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.reports.travelreports.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Travelreports::findOrFail($id);
                        return view("omis.reports.travelreports.ajax.edit", compact('data'))->render();
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
                            $data = Travelreports::where('status', '<>', -1)->get();
                            $html = view("omis.reports.travelreports.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Travelreports::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Travelreports Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Travelreports::findOrFail($id);
                            $html = view("omis.reports.travelreports.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Travelreports::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Travelreports updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Travelreports::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Travelreports Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        