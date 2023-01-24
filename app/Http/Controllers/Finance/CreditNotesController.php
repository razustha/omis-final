<?php
        namespace App\Http\Controllers\Finance;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Finance\Creditnotes;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class CreditnotesController extends Controller
        {
           public function index(Request $request)
            {
                $data = Creditnotes::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.finance.creditnotes.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.creditnotes.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.finance.creditnotes.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.creditnotes.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->creditnotesName)]);
                Creditnotes::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Creditnotes Created Successfully.'], 200);
                }
                return redirect()->route('finance.creditnotes.index')->with('success','The Creditnotes created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Creditnotes::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.creditnotes.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.creditnotes.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Creditnotes::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.finance.creditnotes.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.finance.creditnotes.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Creditnotes::findOrFail($id);
                $request->request->add(['alias' => slugify($request->creditnotesName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Creditnotes updated Successfully.'], 200);
                }
                return redirect()->route('finance.creditnotes.index')->with('success','The Creditnotes updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Creditnotes::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Creditnotes Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Creditnotes::where('status', '<>', -1)->get();
                        return view("omis.finance.creditnotes.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.finance.creditnotes.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Creditnotes::findOrFail($id);
                        return view("omis.finance.creditnotes.ajax.edit", compact('data'))->render();
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
                            $data = Creditnotes::where('status', '<>', -1)->get();
                            $html = view("omis.finance.creditnotes.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Creditnotes::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Creditnotes Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Creditnotes::findOrFail($id);
                            $html = view("omis.finance.creditnotes.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Creditnotes::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Creditnotes updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Creditnotes::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Creditnotes Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        