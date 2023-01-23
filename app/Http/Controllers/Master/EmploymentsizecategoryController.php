<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Employmentsizecategory;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class EmploymentsizecategoryController extends Controller
        {
           public function index(Request $request)
            {
                $data = Employmentsizecategory::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.master.employmentsizecategory.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.employmentsizecategory.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.employmentsizecategory.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.employmentsizecategory.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->employmentsizecategoryName)]);
                Employmentsizecategory::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Employmentsizecategory Created Successfully.'], 200);
                }
                return redirect()->route('master.employmentsizecategory.index')->with('success','The Employmentsizecategory created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Employmentsizecategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.employmentsizecategory.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.employmentsizecategory.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Employmentsizecategory::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.employmentsizecategory.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.employmentsizecategory.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Employmentsizecategory::findOrFail($id);
                $request->request->add(['alias' => slugify($request->employmentsizecategoryName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Employmentsizecategory updated Successfully.'], 200);
                }
                return redirect()->route('master.employmentsizecategory.index')->with('success','The Employmentsizecategory updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Employmentsizecategory::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Employmentsizecategory Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Employmentsizecategory::where('status', '<>', -1)->get();
                        return view("omis.master.employmentsizecategory.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.employmentsizecategory.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Employmentsizecategory::findOrFail($id);
                        return view("omis.master.employmentsizecategory.ajax.edit", compact('data'))->render();
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
                            $data = Employmentsizecategory::where('status', '<>', -1)->get();
                            $html = view("omis.master.employmentsizecategory.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Employmentsizecategory::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Employmentsizecategory Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Employmentsizecategory::findOrFail($id);
                            $html = view("omis.master.employmentsizecategory.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Employmentsizecategory::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Employmentsizecategory updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Employmentsizecategory::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Employmentsizecategory Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        