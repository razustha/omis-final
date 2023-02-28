<?php
        namespace App\Http\Controllers\Hr;
        use App\Http\Controllers\Controller;
use App\Models\Hr\Designation;
use App\Models\Hr\Employee;
use Illuminate\Http\Request;
        use App\Models\Hr\Promotiondemotion;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Validator;

        class PromotiondemotionController extends Controller
        {
           public function index(Request $request)
            {
                $data = Promotiondemotion::where('status','<>',-1)->orderBy('created_at','desc')->get();
                if ($request->ajax()) {
                    $html = view("omis.hr.promotiondemotion.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.promotiondemotion.ajax_index", compact('data'));
            }

            public function create(Request $request)
            {
                if ($request->ajax()) {
                    $html = view("omis.hr.promotiondemotion.ajax.create")->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.promotiondemotion.create");
            }

            public function store(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'promotionTitle' => 'required',
                    'employee_id' => 'required|exists:tbl_employee,employee_id',
                    'type' => 'required',
                    'promotionDate' => 'required',
                    'updated_designation_id' => 'required',
                    'department_id' => 'required',
                    'status' => 'required'
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }

                $request->request->add(['alias' => slugify($request->promotiondemotionName)]);
                $request['updated_department_id'] = $request->department_id;

                Promotiondemotion::create($request->all());
                $employee = Employee::where('employee_id', $request->employee_id)->first();
                $employee->designation_id = $request->updated_designation_id;
                $employee->department_id = $request->updated_department_id;
                $employee->save();
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Promotiondemotion Created Successfully.'], 200);
                }
                return redirect()->route('hr.promotiondemotion.index')->with('success','The Promotiondemotion created Successfully.');
            }

            public function show(Request $request, $id)
            {
                $data = Promotiondemotion::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.promotiondemotion.ajax.show", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.promotiondemotion.show", compact('data'));
            }


            public function edit(Request $request, $id)
            {
                $data = Promotiondemotion::findOrFail($id);
                if ($request->ajax()) {
                    $html = view("omis.hr.promotiondemotion.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                }
                return view("omis.hr.promotiondemotion.edit", compact('data'));
            }


            public function update(Request $request, $id)
            {
                    $validator = Validator::make($request->all(), [
                    'promotionTitle' => 'required',
                    'employee_id' => 'required|exists:tbl_employee,employee_id',
                    'type' => 'required',
                    'promotionDate' => 'required',
                    'updated_designation_id' => 'required',
                    'department_id' => 'required',
                    'status' => 'required'
                ]);

                if ($validator->fails()) {
                    return response()->json([
                        'error' => $validator->errors()->all(),
                    ]);
                }
                
                $data = Promotiondemotion::findOrFail($id);
                $request->request->add(['alias' => slugify($request->promotiondemotionName)]);
                $data->update($request->all());
                if ($request->ajax()) {
                    return response()->json(['status' => true, 'message' => 'The Promotiondemotion updated Successfully.'], 200);
                }
                return redirect()->route('hr.promotiondemotion.index')->with('success','The Promotiondemotion updated Successfully.');
            }

            public function destroy(Request $request,$id)
            {
                $data = Promotiondemotion::findOrFail($id);
                $data->status = -1;
                $data->save();
                return response()->json(['status'=>true,'message'=>'The Promotiondemotion Deleted Successfully.'],200);
            }

            public function getEmployeeDesignation(Request $request)
            {

                $employee = Employee::where('employee_id', $request->employee_id)->first();
                if($request->type == 'promotion')
                {
                    $promotion_designation_id = Designation::where('designation_id', '<', $employee->designation_id)->max('designation_id');
                    $data = Designation::where('designation_id', $promotion_designation_id)->get();
                    $data[0]['department_id'] = $employee->department->department_id;
                } elseif($request->type == 'demotion')
                {
                    $promotion_designation_id = Designation::where('designation_id', '>', $employee->designation_id)->min('designation_id');
                    $data = Designation::where('designation_id', $promotion_designation_id)->get();
                    $data[0]['department_id'] = $employee->department->department_id;
                }

                return response()->json(['status' => 200, 'message' => $data]);
            }

            public static function getAjaxContent($type, $id = '', $option = '')
            {
                switch ($type) {
                    case 'index':
                        $data = Promotiondemotion::where('status', '<>', -1)->get();
                        return view("omis.hr.promotiondemotion.ajax.index", compact('data'))->render();
                        break;
                    case 'create':
                        return view("omis.hr.promotiondemotion.ajax.create")->render();
                        break;
                    case 'edit':
                        $data = Promotiondemotion::findOrFail($id);
                        return view("omis.hr.promotiondemotion.ajax.edit", compact('data'))->render();
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
                            $data = Promotiondemotion::where('status', '<>', -1)->get();
                            $html = view("omis.hr.promotiondemotion.ajax.index", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'store':
                            Promotiondemotion::create($request->all());
                            if ($request->ajax()) {
                                return response()->json(['status' => true, 'message' => 'The Promotiondemotion Created Successfully.'], 200);
                            }
                            break;
                        case 'edit':
                            $data = Promotiondemotion::findOrFail($id);
                            $html = view("omis.hr.promotiondemotion.ajax.edit", compact('data'))->render();
                            return response()->json(['status' => true, 'content' => $html], 200);
                            break;
                        case 'update':
                            $data = Promotiondemotion::findOrFail($id);
                            $data->update($request->all());
                            return response()->json(['status' => true, 'message' => 'The Promotiondemotion updated Successfully.'], 200);
                            break;
                        case 'delete':
                            $data = Promotiondemotion::findOrFail($id);
                            $data->status = -1;
                            $data->save();
                            return response()->json(['status' => true, 'message' => 'The Promotiondemotion Deleted Successfully.'], 200);
                            break;
                    }
                } else {
                }
            }
        }
