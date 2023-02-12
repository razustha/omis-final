<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Hr\Employee;
use App\Models\Hr\Leaveapplication;
use App\Models\Hr\Mangeholiday;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    //
    public function dashboard()
    {
        $employees = Employee::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        $leaves = Leaveapplication::where('leaveApplication_status','approved')->get();
        return view('omis\welcome', compact('employees','leaves'));
    }
    public function calendar() {

        $allholidays = Mangeholiday::get();
        if(auth()->user()->user_type != "EMPLOYEE") {
            $leaves = Leaveapplication::where('leaveApplication_status','approved')->get();

        } else {
            $leaves = Leaveapplication::where('employee_id', auth()->user()->employee->employee_id)->where('leaveApplication_status','approved')->get();

        }
        return view('calendar.index',compact('allholidays','leaves'));

    }

    public function getEvent(Request $request) {
        // dd($this->absentrequest->getAllLeaveRequestOfUser()->where('start_date', '>=', $request->start)->where('end_date',   '<=', $request->end));
        if($request->ajax())
    	{
            return response()->json();
    	}
    	return view('');
    }


}
