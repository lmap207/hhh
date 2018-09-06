<?php

namespace App\Http\Controllers;

use App\Pro;
use Illuminate\Http\Request;

class ProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pros = Pro::orderBy('id','desc')
        ->where('pname','like','%'.request()->keyword.'%')
        ->paginate(5);

        return view('layouts.pro.index',compact('pros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pros = new Pro;

        $pros ->pname = $request ->pname;

        if($pros ->save()){

              return redirect('pro')->with('success','添加成功');

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
        $pros = Pro::findOrFail($id);

        return view('layouts.pro.edit',compact('pros'));
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
        $pros = Pro::findOrFail($id);

        $pros->pname = $request->pname;

        if($pros->save()){

               return redirect('/pro')->with('success','修改成功');

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
        $pros = Pro::findOrFail($id);

        if($pros->delete()){

            return back()->with('success','删除成功');

        }else{

           return back()->with('error','删除失败');
        }
    }
}
