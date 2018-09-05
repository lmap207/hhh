<?php

namespace App\Http\Controllers;


use App\Setting;

use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
		//$setting->logo = '/'.$request->logo->store('uploads');

		if ($request->hasFile('logo')) {
            $setting->logo = '/'.$request->logo->store('uploads');
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

    public function login(){
          return view('admin.login');
    }
    public function dologin(Request $request){
    	     $user = User::where('username',$request->username)->first();
             if(!$user){
                  return back()->with('error','登录失败');
             }
              //校验密码
              if(Hash::check($request->password,$user->password)){
              	//将登录信息写入session
              	 session(['username'=>$user->username,'id'=>$user->id]);
              	return redirect('/admin')->with('success','登录成功');
              }else{
                    return back()->with('error','登录失败');
              }

    }
    public function logout(Request $request){
    	   $request->session()->flush();
              return redirect('/admin/login')->with('success','退出成功');
    }


}
