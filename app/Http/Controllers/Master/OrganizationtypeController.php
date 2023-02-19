<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Organizationtype;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrganizationtypeController extends Controller
{
    public function index(Request $request)
    {
        $data = Organizationtype::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.master.organizationtype.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.organizationtype.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.master.organizationtype.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.organizationtype.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'organizationName' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'error' => $validator->errors()->all(),
        ]);
    }
        $request->request->add(['alias' => slugify($request->organizationName)]);
        Organizationtype::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Organizationtype Created Successfully.'], 200);
        }
        return redirect()->route('master.organizationtype.index')->with('success', 'The Organizationtype created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Organizationtype::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.organizationtype.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.organizationtype.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Organizationtype::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.organizationtype.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.organizationtype.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'organizationName' => 'required'
    ]);

    if ($validator->fails()) {
        return response()->json([
            'error' => $validator->errors()->all(),
        ]);
    }
        $data = Organizationtype::findOrFail($id);
        $request->request->add(['alias' => slugify($request->organizationName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Organizationtype updated Successfully.'], 200);
        }
        return redirect()->route('master.organizationtype.index')->with('success', 'The Organizationtype updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Organizationtype::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Organizationtype Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Organizationtype::where('status', '<>', -1)->get();
                return view("omis.master.organizationtype.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.master.organizationtype.ajax.create")->render();
                break;
            case 'edit':
                $data = Organizationtype::findOrFail($id);
                return view("omis.master.organizationtype.ajax.edit", compact('data'))->render();
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
                    $data = Organizationtype::where('status', '<>', -1)->get();
                    $html = view("omis.master.organizationtype.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Organizationtype::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Organizationtype Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Organizationtype::findOrFail($id);
                    $html = view("omis.master.organizationtype.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Organizationtype::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Organizationtype updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Organizationtype::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Organizationtype Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
