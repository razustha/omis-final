<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Holidaytypes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HolidaytypesController extends Controller
{
    public function index(Request $request)
    {
        $data = Holidaytypes::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.master.holidaytypes.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.holidaytypes.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.master.holidaytypes.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.holidaytypes.create");
    }

    public function store(Request $request)
    {
        $request->request->add(['alias' => slugify($request->holidayName)]);
        Holidaytypes::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Holidaytypes Created Successfully.'], 200);
        }
        return redirect()->route('master.holidaytypes.index')->with('success', 'The Holidaytypes created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Holidaytypes::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.holidaytypes.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.holidaytypes.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Holidaytypes::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.holidaytypes.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.holidaytypes.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Holidaytypes::findOrFail($id);
        $request->request->add(['alias' => slugify($request->holidayName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Holidaytypes updated Successfully.'], 200);
        }
        return redirect()->route('master.holidaytypes.index')->with('success', 'The Holidaytypes updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Holidaytypes::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Holidaytypes Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Holidaytypes::where('status', '<>', -1)->get();
                return view("omis.master.holidaytypes.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.master.holidaytypes.ajax.create")->render();
                break;
            case 'edit':
                $data = Holidaytypes::findOrFail($id);
                return view("omis.master.holidaytypes.ajax.edit", compact('data'))->render();
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
                    $data = Holidaytypes::where('status', '<>', -1)->get();
                    $html = view("omis.master.holidaytypes.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Holidaytypes::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Holidaytypes Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Holidaytypes::findOrFail($id);
                    $html = view("omis.master.holidaytypes.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Holidaytypes::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Holidaytypes updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Holidaytypes::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Holidaytypes Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
