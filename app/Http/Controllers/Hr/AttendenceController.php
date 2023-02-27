<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hr\Attendence;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AttendenceController extends Controller
{
    public function index(Request $request)
    {
        if(auth()->user()->hasRole('super-super-admin','super-admin'))
        {
            $users = User::get();
        } else {
            $users = User::where('id', auth()->user()->id)->get();
        }
        $data = Attendence::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {
            $html = view("omis.hr.attendence.ajax.index", compact('data', 'users'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.attendence.ajax_index", compact('data', 'users'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.hr.attendence.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.attendence.create");
    }

    public function store(Request $request)
    {
        $request->request->add(['alias' => slugify($request->attendenceName)]);
        Attendence::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Attendence Created Successfully.'], 200);
        }
        return redirect()->route('hr.attendence.index')->with('success', 'The Attendence created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Attendence::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.attendence.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.attendence.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Attendence::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.hr.attendence.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.hr.attendence.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Attendence::findOrFail($id);
        $request->request->add(['alias' => slugify($request->attendenceName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Attendence updated Successfully.'], 200);
        }
        return redirect()->route('hr.attendence.index')->with('success', 'The Attendence updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Attendence::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Attendence Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Attendence::where('status', '<>', -1)->get();
                return view("omis.hr.attendence.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.hr.attendence.ajax.create")->render();
                break;
            case 'edit':
                $data = Attendence::findOrFail($id);
                return view("omis.hr.attendence.ajax.edit", compact('data'))->render();
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
                    $data = Attendence::where('status', '<>', -1)->get();
                    $html = view("omis.hr.attendence.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Attendence::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Attendence Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Attendence::findOrFail($id);
                    $html = view("omis.hr.attendence.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Attendence::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Attendence updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Attendence::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Attendence Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }

    public function checkIn(Request $request)
    {
        $data = $request->all();

        $data['employeePosition'] = auth()->user()->name;
        $data['employee_id'] = auth()->user()->id;
        $data['todayDate'] = date('Y-m-d');
        $data['timePicker1'] = date('H:i:s');
        $data['timePicker2'] = null;
        $data['alias'] = null;
        $data['remarks'] = null;
        Attendence::create($data);
        return redirect()->back()->with('success', 'The Check In has been recorded successfully.');
    }
    public function checkOut(Request $request, $id)
    {
        $data = Attendence::findOrFail($id);
        $updateData['timePicker2'] = date('H:i:s');
        $data->update($updateData);
        return redirect()->back()->with('success', 'The Check Out has been recorded successfully.');
    }

    public function getAttendenceDetail(Request $request)
    {
        $data = Attendence::where('todayDate', $request->attendence_id)->get();

        if($data)
        {
            $timepicker1 = $data[0]->timePicker1;
            $time1 = new DateTime($data[0]->todayDate. '' .$data[0]->timePicker1);
            $timepicker2 = $data[count($data) - 1]->timePicker2 ?? "18:00:00";
            $time2 = new DateTime($data[0]->todayDate. '' .$timepicker2);
            $interval = $time1->diff($time2);
            $interval = $interval->format('%h')." Hours ".$interval->format('%i')." Minutes";
            $message['time1'] = $timepicker1;
            $message['time2'] = $timepicker2;
            $message['interval'] = $interval;
            $message['date'] = $request->attendence_id;

            return response()->json([
                'data' => $message,
                'status' => true,
                'message' => "Attendence Generated Successfully."
            ]);

        } else {
            return response()->json([
                'data' => null,
                'status' => false,
                'message' => "Attendence Not Found Successfully."
            ]);
        }


    }
}
