<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use App\Models\Log\LoginLog;
use Illuminate\Http\Request;

class LoginLogController extends Controller
{
    public function index()
    {
        $data = LoginLog::all();
        return view('log.login.index', compact('data'));
    }

    public function show($loginId)
    {
        $LoginLogs = LoginLog::findOrFail($loginId);
        return view('log.login.show', compact('LoginLogs'));
    }

    public function rollback($operationNumber)
    {
        $LoginLogs = LoginLog::where('operation_end_no', $operationNumber)->orderBy('created_at', 'DESC')->get();
        foreach ($LoginLogs as $opLog) {
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
