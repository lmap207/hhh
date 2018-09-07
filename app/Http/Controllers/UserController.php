<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $users = User::orderBy('id','asc')->where('username','like','%'.request()->keywords.'%')->paginate(5);

       //解析模板
       return view('admin.user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 设置添加的表单
        return view('admin.user.create');
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->qx = $request->qx;
        $user->password = Hash::make($request->password);
        $user->tel = $request->tel;
        $user->email = $request->email;

        if($request->hasFile('pic')){
        //将上传的文件放在不同的文件里  方便管理 
        $user->pic = $request->pic->store('/'.'uploads/'.date('Ymd'));
        }

        if($user->save()){
            return redirect('/user')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $users = User::findOrFail($id);
         return view('admin.user.edit',compact('users'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $users = User::findOrFail($id);
         
         $users -> username = $request->username;
         $users -> qx = $request->qx;
         $users -> tel = $request->tel;
         $users -> email = $request->email;
         //dd($users); die;
        if($request->hasFile('pic')){
        //将上传的文件放在不同的文件里  方便管理 
        $users->pic = $request->pic->store('/'.'uploads/'.date('Ymd'));
        }
         
        if($users->save()){
            return redirect('/user')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $del = User::destroy($id);
                     
            if($del){
            return redirect('/user')->with('success','删除成功');
            }else{
            return back()->with('error','删除失败');
           }
    }

}

