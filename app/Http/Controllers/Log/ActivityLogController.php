<?php

namespace App\Http\Controllers\Log;

use App\Http\Controllers\Controller;
use App\Models\Log\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index()
    {
        $data = ActivityLog::all();
        return view('log.activity.index', compact('data'));
    }

    public function show($activity_id)
    {
        $ActivityLogs = ActivityLog::where('activity_id', $activity_id)->firstOrFail();
        return view('log.activity.show', compact('ActivityLogs'));
    }

    public function rollback($operationNumber)
    {
        $ActivityLogs = ActivityLog::where('operation_end_no', $operationNumber)->orderBy('created_at', 'DESC')->get();
        foreach ($ActivityLogs as $opLog) {
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