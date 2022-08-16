<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditSettingRequest;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index() {
        $settings = Setting:: all();
        return view("pages.setting.index", [
            "settings" => $settings
        ]);
    }

    public function save(Request $request)
    {
        $settings = Setting::all();

        $settingNames = [];

        foreach($settings as $setting)
        {
            $settingNames[] = $setting->setting_name;
        }

        $args = $request->only($settingNames);

        foreach($args as $key => $value)
        {
            foreach($settings as $setting)
            {
                if($setting->setting_name === $key)
                {
                    $setting->setting_value = $value;
                    $setting->save();
                }
            }
        }

        return redirect()->back()->with('success',"Save successfull");
    }
    
   
}
