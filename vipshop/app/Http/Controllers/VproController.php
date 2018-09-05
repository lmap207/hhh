<?php

namespace App\Http\Controllers;

use App\Pro;
use App\Vpro;
use Illuminate\Http\Request;

class VproController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vpros = Vpro::orderBy('id','desc')
        ->where('value','like','%'.request()->kerword.'%')
        ->paginate(5);

        return view('layouts.vpro.index',compact('vpros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $pros = Pro::all();

        return view('layouts.vpro.create',compact('pros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vpros = new Vpro;

        $vpros->value = $request->value;

        $vpros->pro_id = $request->pro_id;

        if($vpros->save()){

         // $res = $vpros ->vpros()->sync($request->vpro_id);

         return redirect('vpro')->with('success','修改成功');

        }else{

         return back()->with('error','修改失败');

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
        $vpros = Vpro::findOrFail($id);

        $pros = Pro::all();

        return view('layouts.vpro.edit',compact('vpros','pros'));
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
        $vpros = Vpro::findOrFail($id);
        
        $vpros ->value = $request->value;

        $vpros->pro_id = $request->pro_id;

        if($vpros->save()){

         return redirect('vpro')->with('success','修改成功');

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
        $vpros = Vpro::findOrFail($id);

        if($vpros->delete()){

            return back()->with('success','删除成功');

        }else{

            return back()->with('error','删除失败');
            
        }
    }
}
