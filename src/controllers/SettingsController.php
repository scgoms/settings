<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function store(Request $request)
    {
        $rules = Setting::getValidationRules();
        $booleanSettings = Setting::getAllSettings()->where('type', 'boolean');
        $data = $this->validate($request, $rules);
        $validSettings = array_keys($rules);
        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                Setting::add($key, $val, Setting::getDataType($key));
            }
        }
        foreach ($booleanSettings as $booleanSetting) {
            Setting::add(
                $booleanSetting->name,
                in_array($booleanSetting->name, array_keys($data)),
                Setting::getDataType($booleanSetting->name)
            );
        }

        return redirect()->back()->with('status', 'Settings has been saved.');
    }
}
