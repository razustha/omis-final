<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hr\Employee;
use Illuminate\Support\Facades\Schema;


use App\Models\Master\Document;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $data = Employee::where('status', '<>', -1)->get();
        if ($request->ajax()) {
            $html = view("omis.hr.employee.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.hr.employee.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.create");
    }

    public function store(Request $request)
    {
        nullableFields("tbl_employee");

        $employee = Employee::create($request->all());

        // if ($request->document_name != null) {
        //     foreach ($request->document_name as $key => $document) {

        //         $new_document = Document::create([
        //             'image_path' => $request->document_sample[$key],
        //             'imageable_type' => Employee::class,
        //             'imageable_id' => $employee->employee_id,
        //             'image_name' => $document
        //         ]);
        //         // dd($new_image);
        //     }
        // }
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Employee Created Successfully.'], 200);
        }
        return redirect()->route('hr.employee.index')->with('success', 'The Employee created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Employee::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.employee.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.employee.show", compact('data'));
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
        $data->update($request->all());
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
