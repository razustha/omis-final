<?php
        namespace App\Http\Controllers\Recruit;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Recruit\Offerletter;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class OfferletterController extends Controller
        {
           public function index(Request $request)
            {
                $data = Offerletter::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.recruit.offerletter.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.offerletter.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.recruit.offerletter.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.offerletter.create");
            }

            public function store(Request $request)
            {
                $request->request->add(['alias' => slugify($request->offerletterName)]);
                Offerletter::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Offerletter Created Successfully.'], 200);
                }
                return redirect()->route('recruit.offerletter.index')->with('success','The Offerletter created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Offerletter::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.offerletter.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.offerletter.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Offerletter::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.recruit.offerletter.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.recruit.offerletter.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Offerletter::findOrFail($id);
                $request->request->add(['alias' => slugify($request->offerletterName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Offerletter updated Successfully.'], 200);
                }
                return redirect()->route('recruit.offerletter.index')->with('success','The Offerletter updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Offerletter::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Offerletter Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Offerletter::where('status', '<>', -1)->get();
                        return view("omis.recruit.offerletter.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.recruit.offerletter.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Offerletter::findOrFail($id);
                        return view("omis.recruit.offerletter.ajax.edit", compact('data'))->render();
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
                            $data = Offerletter::where('status', '<>', -1)->get();
                            $html = view("omis.recruit.offerletter.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Offerletter::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Offerletter Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Offerletter::findOrFail($id);
                            $html = view("omis.recruit.offerletter.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Offerletter::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Offerletter updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Offerletter::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Offerletter Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
        