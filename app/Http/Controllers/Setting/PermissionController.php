<?php

namespace App\Http\Controllers\Setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $data = Permission::join('tbl_module','permissions.module_id','tbl_module.module_id')
                            ->where('permissions.status', '<>', -1)->orderBy('tbl_module.module_id', 'asc')
                            ->select('moduleName','permissions.*')->get();
        if ($request->ajax()) {
            $html = view("omis.setting.permission.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.permission.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.setting.permission.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.permission.create");
    }

    public function store(Request $request)
    {
        $request->request->add(['alias' => slugify($request->permissionName)]);
        User::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The permission Created Successfully.'], 200);
        }
        return redirect()->route('setting.permission.index')->with('success', 'The permission created Successfully.');
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
        $data = User::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.setting.permission.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.setting.permission.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $request->request->add(['alias' => slugify($request->permissionName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The permission updated Successfully.'], 200);
        }
        return redirect()->route('setting.permission.index')->with('success', 'The permission updated Successfully.');
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
