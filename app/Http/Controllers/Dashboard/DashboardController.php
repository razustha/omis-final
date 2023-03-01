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

    // event
    public function eventCalendar() {

        // $allholidays = Mangeholiday::get();
        $addcalendarPermission = false;
        $editCalendarPermission = false;
        $deleteCalendarPermission = false;
        $events = Event::get();
        if (auth()->user()->hasRole('super-super-admin') ||auth()->user()->hasRole('super-admin') ) {
            $addcalendarPermission = true;
            $editCalendarPermission = true;
            $deleteCalendarPermission = true;
        }
        return view('calendar.event',compact('events','addcalendarPermission', 'editCalendarPermission',
        'deleteCalendarPermission'));

    }

    public function saveRelocateEventStartDate(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

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

    public function editDeleteEventsShowData($id)
    {
        //the id is event id

        $eventData = Event::find($id);

        return response()->json([
            'success' => true,
            'start_date' => $eventData->startDate,
            'end_date' => $eventData->endDate,
            'start_time' => $eventData->startTime,
            'end_time' => $eventData->endTime,
            'title' => $eventData->eventTitle,
            'description' => $eventData->description ?? '',
            'backgroundColor' => $eventData->backgroundColor ?? '#1C9CD8',
            'textColor' => $eventData->textColor ?? '#FFFFFF',
            'updateEventUrl' => route('updateSelectedEvent', ['id' => $id]),
            'deleteEventUrl' => route('deleteSelectedEvent', ['id' => $id])
        ]);
    }

    public function updateSelectedEvent(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ], [
            'start_date.required' => 'Event starting date is required',
            'end_date.required' => 'Event ending date is required'
        ]);
        $eventData = Event::find($id);
        $eventData->eventTitle = $request->title;
        $eventData->description = $request->description;
        $eventData->startDate = $request->start_date;
        $eventData->endDate = $request->end_date;
        $eventData->startTime = $request->start_time;
        $eventData->endTime = $request->end_time;
        $eventData->backgroundColor = $request->backgroundColor ?? '#1C9CD8';
        $eventData->textColor = $request->textColor ?? '#FFFFFF';

        $eventData->save();
        return redirect()->back()->with('success', 'Event Updated');
    }

    public function deleteSelectedEvent($id)
    {
        $registeredAs = false;
        if (auth()->user()->hasRole('super-super-admin') ||auth()->user()->hasRole('super-admin') ) {
            $registeredAs = true;
        }

        if ($registeredAs == true) {
            //the id is the event id
            Event::find($id)->delete();
            return redirect()->back()->with('success', 'Event Deleted');
        }
        return redirect()->back()->with('failed', 'Not Allowed here. You have to login first.');
    }
    // event


    // Holiday
    public function holidayCalendar() {

        $allholidays = Mangeholiday::get();
        $addcalendarPermission = false;
        $editCalendarPermission = false;
        $deleteCalendarPermission = false;

        if (auth()->user()->hasRole('super-super-admin') ||auth()->user()->hasRole('super-admin') ) {
            $addcalendarPermission = true;
            $editCalendarPermission = true;
            $deleteCalendarPermission = true;
        }

        return view('calendar.holiday',compact('allholidays','addcalendarPermission', 'editCalendarPermission',
        'deleteCalendarPermission'));

    }

    public function saveHoliday(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $addHoliday = Mangeholiday::create([
            'title' => $request->title,
            'description' => $request->description ?? null,
            'startDate' => Carbon::parse($request->startDate)->format('Y-m-d'),
            'endDate' => Carbon::parse($request->endDate)->format('Y-m-d'),
        ]);

        return response()->json($addHoliday);
    }

    public function editHoliday($id)
    {
        //the id is event id

        $eventData = Mangeholiday::find($id);

        return response()->json([
            'success' => true,
            'start_date' => $eventData->startDate,
            'end_date' => $eventData->endDate,
            'title' => $eventData->title,
            'description' => $eventData->description ?? '',
            'updateEventUrl' => route('updateHoliday', ['id' => $id]),
            'deleteEventUrl' => route('deleteHoliday', ['id' => $id])
        ]);
    }

    public function updateHoliday(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ], [
            'start_date.required' => 'Event starting date is required',
            'end_date.required' => 'Event ending date is required'
        ]);
        $eventData = Mangeholiday::find($id);
        $eventData->title = $request->title;
        $eventData->description = $request->description;
        $eventData->startDate = $request->start_date;
        $eventData->endDate = $request->end_date;

        $eventData->save();
        return redirect()->back()->with('success', 'Holiday Updated');
    }

    public function deleteHoliday($id)
    {
        $registeredAs = false;
        if (auth()->user()->hasRole('super-super-admin') ||auth()->user()->hasRole('super-admin') ) {
            $registeredAs = true;
        }

        if ($registeredAs == true) {
            //the id is the event id
            Mangeholiday::find($id)->delete();
            return redirect()->back()->with('success', 'Event Deleted');
        }
        return redirect()->back()->with('failed', 'Not Allowed here. You have to login first.');
    }




}
