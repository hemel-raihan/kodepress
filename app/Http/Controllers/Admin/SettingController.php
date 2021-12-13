<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Admin\Setting;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('backend.admin.settings.site_setting',compact('setting'));
    }

    public function update(Request $request,Setting $setting)
    {
        // $this->validate($request,[
        //     'facebook_link' => 'required',
        //     'logo' => 'required',
        //     'contact' => 'required',
        // ]);

        //get form image
        $image = $request->file('logo');

        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            $settingPath = public_path('uploads/settings');

            $setting_path = public_path('uploads/settings/'.$setting->logo);  // Value is not URL but directory file path
            if (file_exists($setting_path)) {

                @unlink($setting_path);

            }

            $img                     =       Image::make($image->path());
            $img->resize(900, 600)->save($settingPath.'/'.$imagename);

        }
        else
        {
            $imagename = $setting->logo;
        }

        $setting->update([
            'facebook_link' => $request->facebook_link,
            'logo' => $imagename,
            'contact' => $request->contact,
        ]);



        notify()->success("Video Successfully Updated","Update");
        return redirect()->route('admin.settings');
    }
}
