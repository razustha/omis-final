<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hr\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function index(Request $request)
    {
        $data = Department::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'departmentName' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $request->request->add(['alias' => slugify($request->departmentName)]);
        Department::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Department Created Successfully.'], 200);
        }
        return redirect()->route('hr.department.index')->with('success', 'The Department created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Department::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Department::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'departmentName' => 'required',
               'status' => 'required',
        ]);
           if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $data = Department::findOrFail($id);
        $request->request->add(['alias' => slugify($request->departmentName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Department updated Successfully.'], 200);
        }
        return redirect()->route('hr.department.index')->with('success', 'The Department updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Department::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Department Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Department::where('status', '<>', -1)->get();
                return view("omis.hr.department.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.hr.department.ajax.create")->render();
                break;
            case 'edit':
                $data = Department::findOrFail($id);
                return view("omis.hr.department.ajax.edit", compact('data'))->render();
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
                    $data = Department::where('status', '<>', -1)->get();
                    $html = view("omis.hr.department.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Department::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Department Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Department::findOrFail($id);
                    $html = view("omis.hr.department.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Department::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Department updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Department::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Department Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
