<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Hr\Mangeholiday;
        use Illuminate\Support\Facades\DB;
        class MangeholidayController extends Controller
        {
           public function index(Request $request)
            {
                $data = Mangeholiday::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.create");
            }

            public function store(Request $request)
            {
                Mangeholiday::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('hr.mangeholiday.index')->with('success','The Mangeholiday created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Mangeholiday::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Mangeholiday::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.mangeholiday.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.mangeholiday.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Mangeholiday::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('hr.mangeholiday.index')->with('success','The Mangeholiday updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Mangeholiday::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Mangeholiday Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Mangeholiday::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.hr.mangeholiday.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Mangeholiday::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Mangeholiday::findOrFail($id);
                            $html = view("omis.ajax.hr.mangeholiday.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Mangeholiday::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Mangeholiday::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        