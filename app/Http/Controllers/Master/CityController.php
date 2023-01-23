<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $data = City::where('status', '<>', -1)->get();
        if ($request->ajax()) {
            $html = view("omis.master.city.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.city.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.master.city.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.city.create");
    }

    public function checkValidation(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'country_id' => 'required',
            'state_id' => 'required',
            'district_id' => 'required',
            'cityName' => 'required',
            'alias' => 'required',
            'status' => 'required',
            'remarks' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'country_id' => 'required',
            'state_id' => 'required',
            'district_id' => 'required',
            'cityName' => 'required',
            'alias' => 'required',
            'status' => 'required',
            'remarks' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        City::create($request->all());

        return response()->json(['success' => 'City created successfully.']);
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The City Created Successfully.'], 200);
        }
        return redirect()->route('master.city.index')->with('success', 'The City created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = City::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.city.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.city.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = City::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.city.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.city.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'country_id' => 'required',
            'state_id' => 'required',
            'district_id' => 'required',
            'cityName' => 'required',
            'alias' => 'required',
            'status' => 'required',
            'remarks' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $data = City::findOrFail($id);
        $data->update($request->all());

        return response()->json(['success' => 'City Updated successfully.']);
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The City updated Successfully.'], 200);
        }
        return redirect()->route('master.city.index')->with('success', 'The City updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = City::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The City Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = City::where('status', '<>', -1)->get();
                return view("omis.master.city.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.master.city.ajax.create")->render();
                break;
            case 'edit':
                $data = City::findOrFail($id);
                return view("omis.master.city.ajax.edit", compact('data'))->render();
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
                    $data = City::where('status', '<>', -1)->get();
                    $html = view("omis.master.city.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    City::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The City Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = City::findOrFail($id);
                    $html = view("omis.master.city.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = City::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The City updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = City::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The City Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
