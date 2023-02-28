<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use App\Models\Log\OperationLog;
use Illuminate\Http\Request;

class OperationLogController extends Controller
{
    public function index()
    {
        $operations = OperationLog::all();
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