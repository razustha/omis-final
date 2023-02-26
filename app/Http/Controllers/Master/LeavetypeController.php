<?php
        namespace App\Http\Controllers\Master;
        use App\Http\Controllers\Controller;
        use Illuminate\Http\Request;
        use App\Models\Master\Leavetype;
use App\Models\Master\PaidLeave;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class LeavetypeController extends Controller
        {
           public function index(Request $request)
            {
                $data = Leavetype::where('status','<>',-1)->orderBy('created_at','desc')->get();
                $paidLeave = PaidLeave::where('organization_id', 1)->first();
                if ($request->ajax()) {
                    $html = view("omis.master.leavetype.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.leavetype.ajax_index", compact('data','paidLeave'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.master.leavetype.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.leavetype.create");
            }

            public function store(Request $request)
            {

                $request->request->add(['alias' => slugify($request->leavetypeName)]);
                Leavetype::create($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leavetype Created Successfully.'], 200);
                }
                return redirect()->route('master.leavetype.index')->with('success','The Leavetype created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Leavetype::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.leavetype.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.leavetype.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Leavetype::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.master.leavetype.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.master.leavetype.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                $data = Leavetype::findOrFail($id);
                $request->request->add(['alias' => slugify($request->leavetypeName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Leavetype updated Successfully.'], 200);
                }
                return redirect()->route('master.leavetype.index')->with('success','The Leavetype updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Leavetype::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Leavetype Deleted Successfully.'],200);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Leavetype::where('status', '<>', -1)->get();
                        return view("omis.master.leavetype.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.master.leavetype.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Leavetype::findOrFail($id);
                        return view("omis.master.leavetype.ajax.edit", compact('data'))->render();
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
                            $data = Leavetype::where('status', '<>', -1)->get();
                            $html = view("omis.master.leavetype.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Leavetype::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Leavetype Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Leavetype::findOrFail($id);
                            $html = view("omis.master.leavetype.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Leavetype::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Leavetype updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Leavetype::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Leavetype Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }


            public function addPaidLeave(Request $request)
            {
                $this->validate($request, [
                    'paidLeave' => 'required'
                ]);
                $request->request->add(['alias' => slugify($request->leavetypeName)]);

                //checking if there is already paid leave added
                $paidLeave = PaidLeave::where('organization_id', 1)->first();
                if($paidLeave == null){
                    PaidLeave::create([
                        'organization_id' => 1,
                        'paidLeave' => $request->paidLeave,
                    ]);
                }else{
                    $paidLeave->paidLeave = $request->paidLeave;
                    $paidLeave->updated_at = Carbon::now();
                    $paidLeave->save();
                }
                return redirect()->back()->with('success','Success');
            }
        }
