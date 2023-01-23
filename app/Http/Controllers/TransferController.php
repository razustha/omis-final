<?php
        namespace App\Http\Controllers;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Transfer;
        use Illuminate\Support\Facades\DB;
        class TransferController extends Controller
        {
           public function index(Request $request)
            {
                $data = Transfer::where('status','<>',-1)->get();
                if ($request->ajax()) {
                    $html = view("omis.transfer.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.transfer.index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.transfer.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.transfer.create");
            }

            public function store(Request $request)
            {
                Transfer::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                }
                return redirect()->route('transfer.index')->with('success','The Transfer created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Transfer::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.transfer.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.transfer.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Transfer::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.transfer.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.transfer.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Transfer::findOrFail($id);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                }
                return redirect()->route('transfer.index')->with('success','The Transfer updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Transfer::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Transfer Deleted Successfully.'],200);
            }

            public function api(Request $request, $action, $authCode = null)
            {
                $id = $request->primary_id;

                $route = $request->route()->uri;
                $route = explode('/', $route);
                if ($route[0] == 'api') {
                    switch ($action) {
                        case 'index':
                            $data = Transfer::where('status', '<>', -1)->get();
                            $html = view("omis.ajax.transfer.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Transfer::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Transfer::findOrFail($id);
                            $html = view("omis.ajax.transfer.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Transfer::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Transfer::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        