<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use App\Models\Log\OperationLog;
use Illuminate\Http\Request;

class OperationLogController extends Controller
{
    public function index(Request $request)
    {
        $operations = OperationLog::join('users', 'tbl_operation_logs.user_id', 'users.id');
        $userName = $request->user_id;
        $operation_name = $request->operation_name;
        $model_name = $request->model_name;
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        if ($userName)
            $operations->where('users.name', 'like', "%$userName%");
        if ($model_name)
            $operations->where('tbl_operation_logs.model_name', 'like', "%$model_name%");
        if ($operation_name)
            $operations->where('tbl_operation_logs.operation_name', $operation_name);
        if ($from_date && $to_date)
            $operations->whereBetween('tbl_operation_logs.created_at', [$from_date, $to_date]);
        $operations = $operations->select('tbl_operation_logs.*','users.name')->get();

        // $operations = OperationLog::all();
        return view('log.operation.index', compact('operations'));
    }

    public function show($operationNumber)
    {
        $operationLogs = OperationLog::where('operation_end_no', $operationNumber)->get();
        return view('log.operation.show', compact('operationLogs', 'operationNumber'));
    }

    public function rollback($operationNumber)
    {
        $operationLogs = OperationLog::where('operation_end_no', $operationNumber)->orderBy('created_at', 'DESC')->get();
        foreach ($operationLogs as $opLog) {
            if ($opLog->operation_name == 'update') {
                if (str_contains($opLog->model_name, 'Models')) {
                    $model = $opLog->model_name::find($opLog->model_id);
                    if ($model) {
                        $model->update(json_decode($opLog->previous_values, true));
                    }
                } else {
                    \DB::table($opLog->model_name)->where('user_id', $opLog->model_id)->update(json_decode($opLog->previous_values, true));
                }
            }
        }
        return redirect()->route('setting.operation.index')->with('success', 'Rollback Operation Successfully Completed.');
    }
}