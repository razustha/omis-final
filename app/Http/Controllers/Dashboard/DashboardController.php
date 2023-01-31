<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Hr\Mangeholiday;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function calendar() {
        $allholidays = Mangeholiday::get();
        return view('calendar.index',compact('allholidays'));

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
