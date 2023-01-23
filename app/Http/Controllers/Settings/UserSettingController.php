<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Models\Settings\UserSettings;
use Illuminate\Http\Request;

class UserSettingController extends Controller
{
    //
    public function index()
    {
        //
        $usersetting = UserSettings::all();
        return view('omis.settings.user_settings', compact('usersetting'));
    }

    public function update(Request $request)
    {

        foreach ($request->get('usersetting') as $slug => $value)
        {
            $setting = UserSettings::firstOrCreate([
                'slug' => $slug,
                'user_id' => $request->user_id
            ]);

            // $this->uploadRequestImage($request, $setting, $setting['main_image']);

            if ($setting)
            {
                $setting->update(['value' => $value]);
            }
        }

        return redirect()->back()->with('success', trans('messages.update_success', ['entity' => 'Setting']));
    }

}
