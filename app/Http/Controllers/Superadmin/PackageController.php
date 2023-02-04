<?php
namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Superadmin\Package;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public function index(Request $request)
    {
        $data = Package::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.superadmin.package.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.superadmin.package.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.superadmin.package.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.superadmin.package.create");
    }

    public function store(Request $request)
    {

        $request->request->add(['alias' => slugify($request->packageName)]);
        $package = Package::create($request->all());
        $package->feature = implode(',', $request->module);
        $package->save();
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Package Created Successfully.'], 200);
        }
        return redirect()->route('superadmin.package.index')->with('success', 'The Package created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Package::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.superadmin.package.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.superadmin.package.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Package::findOrFail($id);
        $feature = explode(',', $data->feature);
        if ($request->ajax()) {
            $html = view("omis.superadmin.package.ajax.edit", compact('data','feature'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.superadmin.package.edit", compact('data','feature'));
    }


    public function update(Request $request, $id)
    {
        $data = Package::findOrFail($id);
        $request->request->add(['alias' => slugify($request->packageName)]);
        $data->update($request->all());
        $data->feature = implode(',', $request->module);
        $data->save();

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Package updated Successfully.'], 200);
        }
        return redirect()->route('superadmin.package.index')->with('success', 'The Package updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Package::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Package Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Package::where('status', '<>', -1)->get();
                return view("omis.superadmin.package.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.superadmin.package.ajax.create")->render();
                break;
            case 'edit':
                $data = Package::findOrFail($id);
                return view("omis.superadmin.package.ajax.edit", compact('data'))->render();
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
                    $data = Package::where('status', '<>', -1)->get();
                    $html = view("omis.superadmin.package.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Package::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Package Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Package::findOrFail($id);
                    $html = view("omis.superadmin.package.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Package::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Package updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Package::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Package Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}