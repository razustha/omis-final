<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use App\Models\Hr\Employee;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\Setting\Users;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $user = User::with('roles')->where('status', '<>', -1);
        if (auth()->user()->user_type != 'SUPER ADMIN')
            $user = $user->whereNotIn('user_type', ['SUPER ADMIN', 'COMPANY']);
        $data = $user->orderBy('created_at', 'desc')->get();
        // dd($data);
        if ($request->ajax()) {
            $html = view("omis.setting.users.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.users.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.setting.users.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.users.create");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $employee = Employee::findOrFail($request->employee_id);
        $userData = [
            'name' => $employee->full_name,
            'email' => $employee->emailAddress,
            'password' => bcrypt($request->password)
        ];
        try {
            DB::beginTransaction();
            $user = User::create($userData);
            $user->roles()->sync([$request->role_id]);
            $employee->update(['is_login' => 1, 'user_id' => $user->id, 'role_id' => $request->role_id]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

        }
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Users Created Successfully.'], 200);
        }
        return redirect()->route('setting.users.index')->with('success', 'The Users created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = User::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.setting.users.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.users.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $employee = Employee::where('user_id', $data->id)->firstOrFail();
        if ($request->ajax()) {
            $html = view("omis.setting.users.ajax.edit", compact('data', 'employee'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.users.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all(),$id);
        try {
            DB::beginTransaction();
            $user = User::findOrFail($id);
            $request->request->add(['alias' => slugify($request->usersName)]);
            $data = $request->all();
            if ($data['password']) {
                $data['password'] = bcrypt($data['password']);
            } else {
                unset($data['password']);
            }

            $user->update($data);
            $user->roles()->sync([$request->role_id]);
            $employee = Employee::where('user_id', $user->id)->firstOrFail();
            $employee->update(['role_id' => $data['role_id'], 'emailAddress' => $data['email']]);
        } catch (\Exception $e) {
            dd($e->getMessage());
            DB::rollBack();
            Log::info($e->getMessage());
        }

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Users updated Successfully.'], 200);
        }
        return redirect()->route('setting.users.index')->with('success', 'The Users updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Users Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = User::where('status', '<>', -1)->get();
                return view("omis.setting.users.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.setting.users.ajax.create")->render();
                break;
            case 'edit':
                $data = User::findOrFail($id);
                return view("omis.setting.users.ajax.edit", compact('data'))->render();
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
                    $data = User::where('status', '<>', -1)->get();
                    $html = view("omis.setting.users.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    User::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Users Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = User::findOrFail($id);
                    $html = view("omis.setting.users.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = User::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Users updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = User::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Users Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}