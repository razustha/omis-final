<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Service\CommonModelService;
use Exception;
use Illuminate\Http\Request;
use App\Models\Hr\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Log;

class DepartmentController extends Controller
{
    protected $modelService;
    public function __construct(Department $department)
    {
        $this->modelService = new CommonModelService($department);
    }
    public function index(Request $request)
    {
        createActivityLog(DepartmentController::class, 'destroy', 'hr department index');
        $data = Department::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        createActivityLog(DepartmentController::class, 'create', 'hr department create');
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.create");
    }

    public function store(Request $request)
    {
        createActivityLog(DepartmentController::class, 'store', 'hr department store');
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
        DB::beginTransaction();
        try {
            $operationNumber = getOperationNumber();
            $this->modelService->create($operationNumber, $operationNumber, null, $request->all());
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            createErrorLog(DepartmentController::class, 'store', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Department Created Successfully.'], 200);
        }
        return redirect()->route('hr.department.index')->with('success', 'The Department created Successfully.');
    }

    public function show(Request $request, $id)
    {
        createActivityLog(DepartmentController::class, 'show', 'hr department show');
        $data = Department::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        createActivityLog(DepartmentController::class, 'edit', 'hr department edit');
        $data = Department::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.department.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.department.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        createActivityLog(DepartmentController::class, 'update', 'hr department update');
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
        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->update($OperationNumber, $OperationNumber, null, $request->all(), $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(DepartmentController::class, 'update', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Department updated Successfully.'], 200);
        }
        return redirect()->route('hr.department.index')->with('success', 'The Department updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        createActivityLog(DepartmentController::class, 'destroy', 'hr department destroy');
        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->destroy($OperationNumber, $OperationNumber, $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(DepartmentController::class, 'destroy', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
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