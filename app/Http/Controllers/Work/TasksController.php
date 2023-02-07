<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use App\Models\Work\ProjectEmployee;
use App\Models\Work\TaskAssignedEmployee;
use Illuminate\Http\Request;
use App\Models\Work\Tasks;
use App\Models\Work\Timelog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    public function index(Request $request)
    {
        if(auth()->user()->user_type != "EMPLOYEE")
        {
            $data = Tasks::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
            if ($request->ajax()) {
                $html = view("omis.work.tasks.ajax.index", compact('data'))->render();
                return response()->json(['status' => true, 'content' => $html], 200);
            }
            return view("omis.work.tasks.ajax_index", compact('data'));
        } else {
            $data = TaskAssignedEmployee::where('employee_id', auth()->user()->employee->employee_id)->get();

            if ($request->ajax()) {
                $html = view("employee.work.tasks.ajax.index", compact('data'))->render();
                return response()->json(['status' => true, 'content' => $html], 200);
            }
            return view("employee.work.tasks.ajax_index", compact('data'));
        }

    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.work.tasks.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.work.tasks.create");
    }

    public function store(Request $request)
    {
        $request->request->add(['alias' => slugify($request->tasksName)]);
        $tasks = Tasks::create($request->all());

        foreach ($request->employee_id as $employee) {
            $data['employee_id'] = $employee;
            $data['workProject_id'] = $request->workProject_id;
            $data['tasks_id'] = $tasks->tasks_id;
            TaskAssignedEmployee::create($data);
        }
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Tasks Created Successfully.'], 200);
        }
        return redirect()->route('work.tasks.index')->with('success', 'The Tasks created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Tasks::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.work.tasks.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.work.tasks.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Tasks::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.work.tasks.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.work.tasks.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $tasks = Tasks::findOrFail($id);
        $request->request->add(['alias' => slugify($request->tasksName)]);
        $data = $request->all();

        if (!empty($request->employee_id[0])) {
            $removedEmployee = TaskAssignedEmployee::whereNotIn('employee_id', $data['employee_id'])->where('workProject_id', $tasks->workProject_id)->delete();

            foreach ($data['employee_id'] as  $key => $value) {
                $existingEmployee = TaskAssignedEmployee::where('employee_id', $value)->where('workProject_id', $tasks->workProject_id)->where('tasks_id', $tasks->tasks_id)->first();
                if (!$existingEmployee) {
                    $files = [
                        'employee_id' => $value,
                        'workProject_id' => $tasks->workProject_id,
                        'tasks_id' => $tasks->tasks_id,
                    ];
                    TaskAssignedEmployee::create($files);
                }
            }
        } else {
            $removedEmployee = TaskAssignedEmployee::where('workProject_id', $tasks->workProject_id)->delete();
        }

        $tasks->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Tasks updated Successfully.'], 200);
        }
        return redirect()->route('work.tasks.index')->with('success', 'The Tasks updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Tasks::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Tasks Deleted Successfully.'], 200);
    }

    public function getAssignedEmployee(Request $request)
    {
        $project_id = $request->project_id;

        $data = ProjectEmployee::where('status', '<>', -1)->where('workProject_id', $project_id)->orderBy('created_at', 'desc')->with(['employee'])->get();

        return response()->json(['status' => 200, 'message' => $data]);
    }

    public function updateTaskStatus(Request $request)
    {

        $data = Tasks::findOrFail($request->tasks_id);
        $data->tasks_status = "completed";
        if($data->save()){
            return response()->json(['status'=>true, 'message'=>'The Task has been completed Successfully']);
        } else {
            return response()->json(['status'=>false]);
        }
    }

    public function allTaskList()
    {
        if(auth()->user()->user_type != "EMPLOYEE")
        {
            $data = TaskAssignedEmployee::where('status','<>',-1)->orderBy('created_at','desc')->get();
            return view("omis.work.tasks.kanban", compact('data'));
        } else {
            $data = TaskAssignedEmployee::where('status','<>',-1)->where('employee_id', auth()->user()->employee->employee_id)->orderBy('created_at','desc')->get();
            return view("employee.work.tasks.kanban", compact('data'));
        }
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Tasks::where('status', '<>', -1)->get();
                return view("omis.work.tasks.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.work.tasks.ajax.create")->render();
                break;
            case 'edit':
                $data = Tasks::findOrFail($id);
                return view("omis.work.tasks.ajax.edit", compact('data'))->render();
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
                    $data = Tasks::where('status', '<>', -1)->get();
                    $html = view("omis.work.tasks.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Tasks::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Tasks Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Tasks::findOrFail($id);
                    $html = view("omis.work.tasks.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Tasks::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Tasks updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Tasks::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Tasks Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
