<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Service\CommonModelService;
use Illuminate\Http\Request;
use App\Models\Hr\Employee;
use App\Models\Master\Document;
use App\Models\Role;
use Exception;
use Illuminate\Support\Facades\Log;

use Illuminate\Support\Facades\Mail;
use App\Mail\CommonMail;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    protected $userService;
    protected $employeeService;
    public function __construct(Employee $employee, User $user)
    {
        $this->employeeService = new CommonModelService($employee);
        $this->userService = new CommonModelService($user);
    }
    public function index(Request $request)
    {

        if (auth()->user()->user_type == "COMPANY") {
            $organization_id = auth()->user()->organization->organization_id;
            $data = Employee::where('status', '<>', -1)->where('organization_id', $organization_id)->orderBy('created_at', 'desc')->get();
        } else {
            $data = Employee::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        }
        if ($request->ajax()) {
            $html = view("omis.hr.employee.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {

        if ($request->ajax()) {
            $employeeID = Employee::get()->last();
            $emp_id = '1';
            if ($employeeID) {
                $emp_id = $employeeID->employee_id + 1;
            }
            $html = view("omis.hr.employee.ajax.create", ['emp_id' => $emp_id])->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.create");
    }

    public function store(Request $request)
    {

        // dd($request->ajax());
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required',
            'emailAddress' => 'required|email:unique:users',
            'dateOfBirth' => 'required',
            'nationality_id' => 'required',
            'temproryAddress' => 'required',
            'gender_id' => 'required',
            'country_id' => 'required|exists:tbl_country,country_id',
            'state_id' => 'required|exists:tbl_state,state_id',
            'district_id' => 'required|exists:tbl_district,district_id',
            'city_id' => 'required|exists:tbl_city,city_id',
            'permanentAddress' => 'required',
            'role_id' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',
            'is_head' => 'required',
            'joiningDate' => 'required',
            'status' => 'required',

        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return response()->json([
                'error' => $validator->messages(),
            ],500);
        }

        $user = null;

        if ($request->is_login == 1) {
            $users = [
                'name' => $request->firstName . ' ' . $request->middleName . ' ' . $request->lastName,
                'email' => $request->emailAddress,
                'password' => Hash::make($request->password),
                'user_type' => 'EMPLOYEE'
            ];
            try {
                DB::beginTransaction();
                $operationNumber = getOperationNumber();
                $user = $this->userService->create($operationNumber, $operationNumber, null, $users);

                $user_role = Role::findOrFail($request->role_id);

                if ($request->skills) {
                    $skills = collect($request->skills);
                }

                if (isset($skills)) {
                    $request['skills'] = $skills->implode(',');
                }
                $user->roles()->attach($user_role);

                createOperationLog(null, $operationNumber, 'users_roles', $user->id, 'create', null, ['user_id' => $user->id, 'role_id' => $request->role_id]);

                $request['organization_id'] = auth()->user()->userOrganization ? auth()->user()->userOrganization->organization_id : null;

                $request->request->add(['user_id' => $user->id]);
                $employee = $this->employeeService->create(null, $operationNumber, null, $request->all());

            } catch (Exception $e) {
                DB::rollBack();
                Log::info($e->getMessage());
                createErrorLog(EmployeeController::class, 'store', $e->getMessage());
                return $e->getMessage();
            }
            DB::commit();
        } else {
            if ($request->skills) {
                $skills = collect($request->skills);
            }

            if (isset($skills)) {
                $request['skills'] = $skills->implode(',');
            }
            $request['organization_id'] = auth()->user()->userOrganization ? auth()->user()->userOrganization->organization_id : '1';
            try {
                DB::beginTransaction();
                $operationNumber = getOperationNumber();
                $employee = $this->employeeService->create($operationNumber, $operationNumber, null, $request->all());
            } catch (Exception $e) {
                DB::rollBack();
                Log::info($e->getMessage());
                createErrorLog(EmployeeController::class, 'store', $e->getMessage());
            }
            DB::commit();
        }
        if ($user && !empty($user->email)) {
            try {
                $mail_data = [
                    'name' => $employee->full_name,
                    'subject' => 'User Login Credentials',
                    'message' => 'your Login credentials are:',
                    'password' => $request->password,
                    'logo' => $employee->logo,
                    'view' => 'omis.emails.credentials'
                ];
                Mail::to($user->email)->send(new CommonMail($mail_data, $user));
            } catch (Exception $e) {
                Log::info($e->getMessage());
                createErrorLog(EmployeeController::class, 'store', $e->getMessage());
            }
        }

        // $request->request->add(['alias' => slugify($request->employeeName)]);

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Employee Created Successfully.'], 200);
        }
        return redirect()->route('hr.employee.index')->with('success', 'The Employee created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Employee::findOrFail($id);
        $documents = Document::where('imageable_type', Employee::class)->where('imageable_id', $data->employee_id)->get();
        if ($request->ajax()) {
            $html = view("omis.hr.employee.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.show", compact('data', 'documents'));
    }


    public function edit(Request $request, $id)
    {
        $data = Employee::findOrFail($id);
        $skills = explode(',', $data->skills);
        if ($request->ajax()) {
            $html = view("omis.hr.employee.ajax.edit", compact('data', 'skills'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.edit", compact('data', 'skills'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'lastName' => 'required',
            'password' => 'required',
            'emailAddress' => 'required|email',
            'dateOfBirth' => 'required',
            'nationality_id' => 'required',
            'temproryAddress' => 'required',
            'gender_id' => 'required',
            'country_id' => 'required|exists:tbl_country,country_id',
            'state_id' => 'required|exists:tbl_state,state_id',
            'district_id' => 'required|exists:tbl_district,district_id',
            'city_id' => 'required|exists:tbl_city,city_id',
            'permanentAddress' => 'required',
            'role_id' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',
            'is_head' => 'required',
            'joiningDate' => 'required',
            'status' => 'required',

        ]);

        if ($validator->fails()) {
            // dd($validator->messages());
            return response()->json([
                'error' => $validator->messages(),
            ],500);
        }

        $employee = Employee::findOrFail($id);
        $employee->skills = null;
        if ($request->skills) {
            $skills = collect($request->skills);
        }

        if (isset($skills)) {
            $request['skills'] = $skills->implode(',');
        }
        $request['organization_id'] = auth()->user()->userOrganization ? auth()->user()->userOrganization->organization_id : '1';
        $OperationNumber = getOperationNumber();

        try {
            DB::beginTransaction();
            $this->employeeService->update($OperationNumber, $OperationNumber, null, $request->except('image_name', 'image_path', 'temp', 'inlineRadioOptions'), $id);
            $user = User::find($employee->user_id);
            if ($user) {
                $previousRole = [];
                foreach ($user->roles as $role) {
                    $previousRole = ['user_id' => $role->pivot->user_id, 'role_id' => $role->pivot->role_id];
                }
                $user->roles()->sync([$request->role_id]);
                createOperationLog(null, $OperationNumber, 'users_roles', $user->id, 'update', $previousRole, ['user_id' => $user->id, 'role_id' => $request->role_id]);
            }
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(EmployeeController::class, 'update', $e->getMessage());
        }
        DB::commit();
        $imagePath = [];
        $data = $request->all();

        if (!empty($data['image_path'])) {
            foreach ($data['image_path'] as $key => $value) {
                if (!empty($data['checklist_id'][$key])) {
                    $existingDocs = Document::find($data['checklist_id'][$key]);
                    if ($existingDocs) {
                        $imagePath[] = $existingDocs->image_path;
                    }
                }
                $imagePath[$key] = $data['image_path'][$key];
            }
        }
        if (!empty($data['image_name'])) {
            foreach ($data['image_name'] as $key => $value) {
                if ($value != null) {
                    $files = [
                        'image_path' => $request->image_path[$key],
                        'imageable_type' => Employee::class,
                        'imageable_id' => $id,
                        'image_name' => $data['image_name'][$key]
                    ];

                    if (isset($imagePath[$key])) {
                        $files['image_path'] = $imagePath[$key];
                    }
                    if (!empty($data['checklist_id'][$key])) {
                        $existingQuli = Document::find($data['checklist_id'][$key]);
                        if ($existingQuli) {
                            $existingQuli->update($files);
                        }
                    } else {
                        Document::create($files);
                    }
                }
            }
        }
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Employee updated Successfully.'], 200);
        }
        return redirect()->route('hr.employee.index')->with('success', 'The Employee updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Employee::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Employee Deleted Successfully.'], 200);
    }

    public function getHeadOfDepartment(Request $request)
    {
        $department_id = $request->department_id;
        // $data = Employee::where('status', '<>', -1)->where('organization_id',auth()->user()->employee->organization_id)->where('department_id', $department_id)->where('is_head', 'manager')->orderBy('created_at', 'desc')->get();
        $data = Employee::where('status', '<>', -1)->where('department_id', $department_id)->where('is_head', 'manager')->orderBy('created_at', 'desc')->get();

        return response()->json(['status' => 200, 'message' => $data]);
    }

    public function getDepartmentEmployee(Request $request)
    {
        $department_id = $request->department_id;
        $data = Employee::where('department_id', $department_id)->orderBy('created_at', 'desc')->get();

        return response()->json(['status' => 200, 'message' => $data]);
    }



    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Employee::where('status', '<>', -1)->get();
                return view("omis.hr.employee.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.hr.employee.ajax.create")->render();
                break;
            case 'edit':
                $data = Employee::findOrFail($id);
                return view("omis.hr.employee.ajax.edit", compact('data'))->render();
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
                    $data = Employee::where('status', '<>', -1)->get();
                    $html = view("omis.hr.employee.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Employee::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Employee Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Employee::findOrFail($id);
                    $html = view("omis.hr.employee.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Employee::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Employee updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Employee::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Employee Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
