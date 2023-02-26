<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Hr\Employee;
use App\Models\Hr\Leaveapplication;
use App\Models\Hr\Mangeholiday;
use App\Models\Eventsandmeetings\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;


class DashboardController extends Controller
{

    //
    public function dashboard()
    {
        $employees = Employee::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        $leaves = Leaveapplication::where('leaveApplication_status','approved')->get();
        return view('omis.welcome', compact('employees','leaves'));
    }
    public function calendar() {

        $allholidays = Mangeholiday::get();
        $events = Event::get();
        if(auth()->user()->user_type != "EMPLOYEE") {
            $leaves = Leaveapplication::where('leaveApplication_status','approved')->get();

        } else {
            $leaves = Leaveapplication::where('employee_id', auth()->user()->employee->employee_id)->where('leaveApplication_status','approved')->get();

        }
        return view('calendar.index',compact('allholidays','leaves','events'));

    }

    public function saveRelocateEventStartDate(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        //getting the user id
        // if (Auth::guard('superadmin')->check()) {
        //     $userid = Auth::guard('superadmin')->user()->id;
        // } elseif (Auth::guard('recruiter')->check()) {
        //     $userid = Auth::guard('recruiter')->user()->id;
        // } else {
        //     return response()->json('Not Allowed here. You have to login first.');
        // }

        //getting the user datas

        $addEvent = Event::create([
            'eventTitle' => $request->title,
            'description' => $request->description ?? null,
            'startDate' => Carbon::parse($request->startDate)->format('Y-m-d'),
            'endDate' => Carbon::parse($request->endDate)->format('Y-m-d'),
            'startTime' => Carbon::parse($request->startTime, 'Asia/Kathmandu') ?? null,
            'endTime' => Carbon::parse($request->endTime, 'Asia/Kathmandu') ?? null,
            'backgroundColor' => $request->backgroundColor ?? '#1C9CD8',
            'textColor' => $request->textColor ?? '#FFFFFF',
        ]);

        return response()->json($addEvent);
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
