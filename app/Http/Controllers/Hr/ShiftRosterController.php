<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Shiftroster;
        use Illuminate\Support\Facades\DB;
        class ShiftrosterController extends Controller
        {
           public function index(Request $request)
            {
                $data = Shiftroster::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.create");
            }

            public function store(Request $request)
            {
                Shiftroster::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('hr.shiftroster.index')->with('success','The Shiftroster created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Shiftroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Shiftroster::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.shiftroster.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.shiftroster.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Shiftroster::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
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

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Shiftroster::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.hr.shiftroster.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Shiftroster::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Shiftroster::findOrFail($id);
                            $html = view("omis.ajax.hr.shiftroster.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Shiftroster::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Shiftroster::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        