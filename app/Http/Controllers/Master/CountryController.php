<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Country;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    public function index(Request $request)
    {
        $data = Country::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.master.country.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.country.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.master.country.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.country.create");
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'countryName' => 'required|unique:tbl_country',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $request->request->add(['alias' => slugify($request->countryName)]);
        Country::create($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
        }
        return redirect()->route('master.country.index')->with('success', 'The Country created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Country::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.country.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.country.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Country::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.master.country.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.master.country.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'countryName' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all(),
            ]);
        }
        $data = Country::findOrFail($id);
        $request->request->add(['alias' => slugify($request->countryName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
        }
        return redirect()->route('master.country.index')->with('success', 'The Country updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Country::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Country::where('status', '<>', -1)->get();
                return view("omis.master.country.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.master.country.ajax.create")->render();
                break;
            case 'edit':
                $data = Country::findOrFail($id);
                return view("omis.master.country.ajax.edit", compact('data'))->render();
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
                    $data = Country::where('status', '<>', -1)->get();
                    $html = view("omis.master.country.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Country::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Country Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Country::findOrFail($id);
                    $html = view("omis.master.country.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Country::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Country updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Country::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Country Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
