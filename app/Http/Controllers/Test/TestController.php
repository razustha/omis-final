<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Test\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{

    public function test()
    {
        $permissions = [
            //module_id = 1
            'Master' => [

                'country' => [
                    'master.country.index',
                    'master.country.create',
                    'master.country.show',
                    'master.country.store',
                    'master.country.edit',
                    'master.country.update',
                    'master.country.destory',
                ],
                'state' => [
                    'master.state.index',
                    'master.state.create',
                    'master.state.show',
                    'master.state.store',
                    'master.state.edit',
                    'master.state.update',
                    'master.state.destory',
                ],
                'district' => [
                    'master.district.index',
                    'master.district.create',
                    'master.district.show',
                    'master.district.store',
                    'master.district.edit',
                    'master.district.update',
                    'master.district.destory',
                ],
            ],

        ];

        $moduleID = 1;
        foreach ($permissions as $mkey => $modules) {
            foreach ($modules as $gkey => $models) {
                foreach ($models as $model) {
                    $slug = slugify($model, "");
                    $permissionName = ucwords(str_replace(".", " ", "$model"));
                    $pemArr = [
                        'name' => $permissionName,
                        'slug' => $slug,
                        'group_name' => $gkey,
                        'guard_name' => 'web',
                        'module_id' => $moduleID,
                        'createdOn' => now(),
                        'createdBy' => '1',
                        'updatedBy' => '1',
                        'status' => '1',
                    ];
                    $permission = Permission::where('slug', $slug)->first();
                    if ($permission)
                        $permission->update($pemArr);
                    else
                        Permission::create($pemArr);
                }
            }
        }
    }
    public function index(Request $request)
    {
        $data = Test::where('status', '<>', -1)->get();
        if ($request->ajax()) {
            $html = view("omis.test.test.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.test.test.index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.test.test.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.test.test.create");
    }

    public function store(Request $request)
    {
        Test::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Test Created Successfully.'], 200);
        }
        return redirect()->route('test.test.index')->with('success', 'The Test created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Test::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.test.test.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.test.test.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Test::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.test.test.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.test.test.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Test::findOrFail($id);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Test updated Successfully.'], 200);
        }
        return redirect()->route('test.test.index')->with('success', 'The Test updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Test::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Test Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Test::where('status', '<>', -1)->get();
                return view("omis.test.test.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.test.test.ajax.create")->render();
                break;
            case 'edit':
                $data = Test::findOrFail($id);
                return view("omis.test.test.ajax.edit", compact('data'))->render();
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
                    $data = Test::where('status', '<>', -1)->get();
                    $html = view("omis.test.test.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Test::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Test Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Test::findOrFail($id);
                    $html = view("omis.test.test.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Test::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Test updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Test::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Test Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
