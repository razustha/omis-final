<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\District;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class DistrictController extends Controller
        {
           public function index(Request $request)
            {
                $data = District::where('status','<>',-1)->orderBy('created_at','asc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.district.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.district.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.district.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.district.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'districtName' => 'required',
                    'country_id' => 'required|exists:tbl_country,country_id',
                    'state_id' => 'required|exists:tbl_state,state_id',
                ]);
        
                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }
                District::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The District Created Successfully.'], 200);
                }
                return redirect()->route('master.district.index')->with('success','The District created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = District::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.district.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.district.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = District::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.district.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.district.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = District::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The District updated Successfully.'], 200);
                }
                return redirect()->route('master.district.index')->with('success','The District updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = District::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The District Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = District::where('status', '<>', -1)->get();
                        return view("omis.master.district.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.district.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = District::findOrFail($id);
                        return view("omis.master.district.ajax.edit", compact('data'))->render();
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
                            $data = District::where('status', '<>', -1)->get();
                            $html = view("omis.master.district.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            District::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The District Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = District::findOrFail($id);
                            $html = view("omis.master.district.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = District::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The District updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = District::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The District Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }

            public function getDistrict(Request $request)
            {
                $state_id = $request->state_id;
                $districts = District::where('state_id',$state_id)->get();
                return response()->json(['status'=>200, 'message'=>$districts]);
            }
        }
