<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        // $data = Permission::join('tbl_module','permissions.module_id','tbl_module.module_id')
        //                     ->where('permissions.status', '<>', -1)->orderBy('tbl_module.module_id', 'asc')
        //                     ->select('moduleName','permissions.*')->get();
        $groupPermissions = Permission::join('tbl_module', 'permissions.module_id', 'tbl_module.module_id')
            ->where('permissions.status', '<>', -1)->orderBy('tbl_module.module_id', 'asc')
            ->select('moduleName', 'permissions.*')->get()->groupBy('group_name')->chunk(3);
        $data = Role::where('roles.status', '<>', -1)->get();
        // dd($data);
        if ($request->ajax()) {
            $html = view("omis.setting.role.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.role.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        $groupPermissions = Permission::join('tbl_module', 'permissions.module_id', 'tbl_module.module_id')
            ->where('permissions.status', '<>', -1)->orderBy('tbl_module.module_id', 'asc')
            ->select('moduleName', 'permissions.*')->get()->groupBy('group_name')->chunk(3);
        // $groupPermissions = $this->permission->getPermissionByGroupWise()->groupBy('group_name')->chunk(3);
        if ($request->ajax()) {
            $html = view("omis.setting.role.ajax.create", ['groupPermissions' => $groupPermissions])->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.permission.create");
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $role = Role::create(['name' => $request->input('name'), 'remarks' => $request->remarks, 'slug' => slugify($request->name)]);
        /**
         * Remove all current permissions and set the given ones.
         */
        foreach ($request->permissions as $prId) {
            RolePermission::create(['role_id' => $role->id, 'permission_id' => $prId]);
        }
        // $role->syncPermissions($request->input('permissions'));

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Role Created Successfully.'], 200);
        }
        return redirect()->route('setting.role.index')->with('success', 'The Role created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = User::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.setting.permission.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.permission.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        $groupPermissions = Permission::join('tbl_module', 'permissions.module_id', 'tbl_module.module_id')
            ->where('permissions.status', '<>', -1)->orderBy('tbl_module.module_id', 'asc')
            ->select('moduleName', 'permissions.*')->get()->groupBy('group_name')->chunk(3);
        if ($request->ajax()) {
            $html = view("omis.setting.role.ajax.edit", ['groupPermissions' => $groupPermissions, 'role' => $role])->render();

            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.role.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);
        // dd($request->all());
        $role->update(['name' => $request->input('name'), 'remarks' => $request->remarks, 'slug' => slugify($request->name)]);
        /**
         * Remove all current permissions and set the given ones.
         */
        RolePermission::where('role_id', $role->id)->delete();
        foreach ($request->permissions as $prId) {
            RolePermission::create(['role_id' => $role->id, 'permission_id' => $prId]);
        }

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Role updated Successfully.'], 200);
        }
        return redirect()->route('setting.permission.index')->with('success', 'The Role updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The permission Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = User::where('status', '<>', -1)->get();
                return view("omis.setting.permission.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.setting.permission.ajax.create")->render();
                break;
            case 'edit':
                $data = User::findOrFail($id);
                return view("omis.setting.permission.ajax.edit", compact('data'))->render();
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
                    $html = view("omis.setting.permission.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    User::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The permission Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = User::findOrFail($id);
                    $html = view("omis.setting.permission.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = User::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The permission updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = User::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The permission Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
