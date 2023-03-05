<?php
namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use App\Service\CommonModelService;
use Illuminate\Http\Request;
use App\Models\Hr\Designation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Log;

class DesignationController extends Controller
{
    protected $modelService;
    public function __construct(Designation $model)
    {
        $this->modelService = new CommonModelService($model);
    }
    public function index(Request $request)
    {
        createActivityLog(DesignationController::class, 'index', 'hr designation index');
        $data = Designation::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.hr.designation.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.designation.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        createActivityLog(DesignationController::class, 'create', 'hr designation create');

        if ($request->ajax()) {
            $html = view("omis.hr.designation.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.designation.create");
    }

    public function store(Request $request)
    {
        createActivityLog(DesignationController::class, 'store', 'hr designation store');

        $validator = Validator::make($request->all(), [
            'designationName' => 'required',
            'rank' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }

        $request->request->add(['alias' => slugify($request->designationName)]);

        DB::beginTransaction();
        try {
            $operationNumber = getOperationNumber();
            $this->modelService->create($operationNumber, $operationNumber, null, $request->all());
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            createErrorLog(DesignationController::class, 'store', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Designation Created Successfully.'], 200);
        }
        return redirect()->route('hr.designation.index')->with('success', 'The Designation created Successfully.');
    }

    public function show(Request $request, $id)
    {
        createActivityLog(DesignationController::class, 'show', 'hr designation show');

        $data = Designation::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.designation.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.designation.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        createActivityLog(DesignationController::class, 'edit', 'hr designation edit');

        $data = Designation::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.designation.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.designation.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        createActivityLog(DesignationController::class, 'update', 'hr designation update');

        $validator = Validator::make($request->all(), [
            'designationName' => 'required',
            'rank' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $request->request->add(['alias' => slugify($request->designationName)]);
        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->update($OperationNumber, $OperationNumber, null, $request->all(), $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(DesignationController::class, 'update', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Designation updated Successfully.'], 200);
        }
        return redirect()->route('hr.designation.index')->with('success', 'The Designation updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        createActivityLog(DesignationController::class, 'destroy', 'hr designation destroy');

        DB::beginTransaction();
        try {
            $OperationNumber = getOperationNumber();
            $this->modelService->destroy($OperationNumber, $OperationNumber, $id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            createErrorLog(DesignationController::class, 'destroy', $e->getMessage());
            return response()->json(['status' => false, 'message' => $e->getMessage()], 500);
        }
        DB::commit();
        return response()->json(['status' => true, 'message' => 'The Designation Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Designation::where('status', '<>', -1)->get();
                return view("omis.hr.designation.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.hr.designation.ajax.create")->render();
                break;
            case 'edit':
                $data = Designation::findOrFail($id);
                return view("omis.hr.designation.ajax.edit", compact('data'))->render();
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
                    $data = Designation::where('status', '<>', -1)->get();
                    $html = view("omis.hr.designation.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Designation::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Designation Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Designation::findOrFail($id);
                    $html = view("omis.hr.designation.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Designation::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Designation updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Designation::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Designation Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}