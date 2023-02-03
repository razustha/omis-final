<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hr\Employee;
use App\Models\Master\Document;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $data = Employee::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
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
            $emp_id = '';
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

        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'password' => 'required',
            'emailAddress' => 'required|email:unique:users',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        if ($request->is_login == 1) {
            $users = [
                'name' => $request->firstName . ' ' . $request->middleName . ' ' . $request->lastName,
                'email' => $request->emailAddress,
                'password' => Hash::make($request->password),
                'user_type' => 'EMPLOYEE'
            ];
            $user = User::create($users);
            $user_role = Role::findOrFail($request->role_id);
            $user->roles()->attach($user_role);
            Employee::create($request->all());
        }
        $request->request->add(['alias' => slugify($request->employeeName)]);

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
        if ($request->ajax()) {
            $html = view("omis.hr.employee.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Employee::findOrFail($id);

        $employee = $data->update($request->except('image_name', 'image_path', 'temp', 'inlineRadioOptions'));

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
            foreach ($data['image_name'] as  $key => $value) {
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
