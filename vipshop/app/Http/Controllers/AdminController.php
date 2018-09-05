<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index()
    {
    	return view('admin');
    }


    public function setting()
    {
    	//读取表中的数据
		$setting = Setting::first();
    	//echo 111;
		return view('admin.setting', compact('setting'));
    }


    public function update(Request $request)
    {
    	$setting = Setting::first();
//dd($setting);
		if(!$setting){
			$setting = new Setting;
		}

		$setting -> title = $request->title;
		$setting -> sopen = $request->sopen;
		//dd($setting->sopen);
		//$setting->logo = '/'.$request->logo->store('upload');

		if ($request->hasFile('logo')) {
            $setting->logo = '/'.$request->logo->store('upload');
        }

        if ($request->hasFile('qrcode')) {
            $setting->qrcode = '/'.$request->qrcode->store('upload');
        }
		if($setting->save()){
			return back()->with('success','设置成功');
		}else{
			return back()->with('error','设置失败!!');
		}
    }
}
