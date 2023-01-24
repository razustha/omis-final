<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Traveltype;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TraveltypeController extends Controller
{
    public function index(Request $request)
    {
        $data = Traveltype::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.master.traveltype.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.traveltype.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.master.traveltype.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.traveltype.create");
    }

    public function store(Request $request)
    {
        $request->request->add(['alias' => slugify($request->travelTypeName)]);
        Traveltype::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Traveltype Created Successfully.'], 200);
        }
        return redirect()->route('master.traveltype.index')->with('success', 'The Traveltype created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Traveltype::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.traveltype.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.traveltype.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Traveltype::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.traveltype.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.traveltype.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Traveltype::findOrFail($id);
        $request->request->add(['alias' => slugify($request->travelTypeName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Traveltype updated Successfully.'], 200);
        }
        return redirect()->route('master.traveltype.index')->with('success', 'The Traveltype updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Traveltype::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Traveltype Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Traveltype::where('status', '<>', -1)->get();
                return view("omis.master.traveltype.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.master.traveltype.ajax.create")->render();
                break;
            case 'edit':
                $data = Traveltype::findOrFail($id);
                return view("omis.master.traveltype.ajax.edit", compact('data'))->render();
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
                    $data = Traveltype::where('status', '<>', -1)->get();
                    $html = view("omis.master.traveltype.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Traveltype::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Traveltype Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Traveltype::findOrFail($id);
                    $html = view("omis.master.traveltype.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Traveltype::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Traveltype updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Traveltype::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Traveltype Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
