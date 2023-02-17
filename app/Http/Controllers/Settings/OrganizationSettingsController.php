<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\OrganizationSettings;
use App\Models\Setting\Setting;
use App\Models\Settings\NotificationSettings;
use Illuminate\Http\Request;

class OrganizationSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $organizationsettings = OrganizationSettings::all();
        $notificationsettings = NotificationSettings::all();
        return view('settings.organizationsettings.index', compact('organizationsettings','notificationsettings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        foreach ($request->get('organizationSetting') as $slug => $value)
        {
            $organizationSetting = OrganizationSettings::firstOrCreate([
                'key' => $slug
            ]);

            if ($organizationSetting)
            {
                $organizationSetting->update(['value' => $value]);
            }
        }

        return redirect()->back()->with('success', trans('messages.update_success', ['entity' => 'Setting']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
