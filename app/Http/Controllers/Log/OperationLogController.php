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
        $operations = OperationLog::all();
        return view('log.operation.show', compact('operationLogs'));
    }
}