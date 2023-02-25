<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Mail\CommonMail;
use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use Illuminate\Http\Request;
use App\Models\Settings\Organization;
use App\Models\Superadmin\Package;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function index(Request $request)
    {
        $data = Organization::where('status', '<>', -1)->orderBy('created_at', 'desc')->get();
        if ($request->ajax()) {
            $html = view("omis.settings.organization.ajax.index", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.settings.organization.ajax_index", compact('data'));
    }

    public function create(Request $request)
    {
        if ($request->ajax()) {
            $html = view("omis.settings.organization.ajax.create")->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.settings.organization.create");
    }

    public function store(Request $request)
    {
        if ($request->fromWorkDays == $request->toWorkDays) {
            return redirect()->back()->with('failed', 'Work days should not be same');
        }
        $allDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $fromWorkDayNumber = 0;
        $toWorkDayNumber = 0;
        for ($i = 0; $i > count($allDays); $i++) {
            if ($allDays[$i] == $request->fromWorkDays) {
                $fromWorkDayNumber = $i + 1;
            }
            if ($allDays[$i] == $request->toWorkDays) {
                $toWorkDayNumber = $i + 1;
            }
        }
        if ($fromWorkDayNumber > $toWorkDayNumber) {
            return redirect()->back()->with('failed', 'From Work days should not be greater than To work days ');
        }
        $workDays = [$request->fromWorkDays, $request->toWorkDays];
        $workDays = implode('-', $workDays);
        $request->request->add(['alias' => slugify($request->organizationName)]);
        $users = [
            'name' => $request->ownerName,
            'email' => $request->emailAddress,
            'password' => Hash::make($request->password),
            'user_type' => 'COMPANY'
        ];
        try {
            DB::beginTransaction();
            $user = User::create($users);
            $orgData = $request->all();
            $orgData['user_id'] = $user->id;
            $orgData['workDays'] = $workDays;
            $organization = Organization::create($orgData);
            $package = Package::where('package_id', $organization->package_id)->first();

            $permissions = Permission::whereIn('module_id', explode(',', $package->feature))->get();
            $role = Role::where('slug', 'super-admin')->first();
            if (!$role) {
                $role = Role::create([
                    'name' => 'Super Admin',
                    'slug' => 'super-admin',
                    'createdOn' => now(),
                    'createdBy' => '1',
                    'updatedBy' => '1',
                ]);
                foreach ($permissions as $permission) {
                    RolePermission::create(['role_id' => $role->id, 'permission_id' => $permission->id]);
                }
            }
            // RolePermission::where('role_id', 2)->delete();


            $user->roles()->attach($role);

            //if App is in live mode then
            if (!env('APP_MODE')) {
                if (!empty($user->email)) {
                    try {
                        $mail_data = [
                            'name' => $user->name,
                            'subject' => 'User Login Credentials',
                            'message' => 'your Login credentials are:',
                            'password' => $request->password,
                            'logo' => $organization->logo,
                            'view' => 'omis.emails.credentials'
                        ];
                        Mail::to($user->email)->send(new CommonMail($mail_data, $user));
                    } catch (Exception $e) {
                        Log::info($e->getMessage());
                        return $e->getMessage();

                    }
                }
            }
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());
            return $e->getMessage();

        }

        DB::commit();

        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Organization Created Successfully.'], 200);
        }
        return redirect()->route('settings.organization.index')->with('success', 'The Organization created Successfully.');
    }

    public function show(Request $request, $id)
    {
        $data = Organization::findOrFail($id);
        if ($request->ajax()) {
            $html = view("omis.settings.organization.ajax.show", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.settings.organization.show", compact('data'));
    }


    public function edit(Request $request, $id)
    {
        $data = Organization::findOrFail($id);
        // dd($data);
        if ($request->ajax()) {
            $html = view("omis.settings.organization.ajax.edit", compact('data'))->render();
            return response()->json(['status' => true, 'content' => $html], 200);
        }
        return view("omis.settings.organization.edit", compact('data'));
    }


    public function update(Request $request, $id)
    {
        $data = Organization::findOrFail($id);
        $request->request->add(['alias' => slugify($request->organizationName)]);
        $data->update($request->all());
        if ($request->ajax()) {
            return response()->json(['status' => true, 'message' => 'The Organization updated Successfully.'], 200);
        }
        return redirect()->route('settings.organization.index')->with('success', 'The Organization updated Successfully.');
    }

    public function destroy(Request $request, $id)
    {
        $data = Organization::findOrFail($id);
        $data->status = -1;
        $data->save();
        return response()->json(['status' => true, 'message' => 'The Organization Deleted Successfully.'], 200);
    }

    public static function getAjaxContent($type, $id = '', $option = '')
    {
        switch ($type) {
            case 'index':
                $data = Organization::where('status', '<>', -1)->get();
                return view("omis.settings.organization.ajax.index", compact('data'))->render();
                break;
            case 'create':
                return view("omis.settings.organization.ajax.create")->render();
                break;
            case 'edit':
                $data = Organization::findOrFail($id);
                return view("omis.settings.organization.ajax.edit", compact('data'))->render();
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
                    $data = Organization::where('status', '<>', -1)->get();
                    $html = view("omis.settings.organization.ajax.index", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'store':
                    Organization::create($request->all());
                    if ($request->ajax()) {
                        return response()->json(['status' => true, 'message' => 'The Organization Created Successfully.'], 200);
                    }
                    break;
                case 'edit':
                    $data = Organization::findOrFail($id);
                    $html = view("omis.settings.organization.ajax.edit", compact('data'))->render();
                    return response()->json(['status' => true, 'content' => $html], 200);
                    break;
                case 'update':
                    $data = Organization::findOrFail($id);
                    $data->update($request->all());
                    return response()->json(['status' => true, 'message' => 'The Organization updated Successfully.'], 200);
                    break;
                case 'delete':
                    $data = Organization::findOrFail($id);
                    $data->status = -1;
                    $data->save();
                    return response()->json(['status' => true, 'message' => 'The Organization Deleted Successfully.'], 200);
                    break;
            }
        } else {
        }
    }
}
