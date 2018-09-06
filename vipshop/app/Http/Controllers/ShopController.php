<?php

namespace App\Http\Controllers;

use App\Author;
use App\Cate;
use App\Good;
use App\Pro;
use App\Vpro;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Good::orderBy('id','desc')
        ->where('name','like', '%'.request()->keywords.'%')
        ->paginate(2);
        

        return view('admin.shop.index', ['shops' => $shops]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cates = Cate::all();
        $pros = Pro::all();
        
  
        return view('admin.shop.create', ['cates' => $cates, 'pros' => $pros]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shop = new Good;

        $shop -> name = $request->name;
        $shop -> price = $request->price;
        $shop -> sice = $request->sice;
        $shop -> cate_id = $request->cate_id;
        $shop -> pro_id = $request->pro_id;
        $shop -> title = $request->title;
        $shop -> intro = $request->intro;
        $shop -> author = $request->author;

        if ($request->hasFile('picture')) {
            $shop->picture = '/'.$request->picture->store('uploads/'.date('Ymd'));
        }

        if($shop -> save()){
            return redirect('/shop')->with('success', '添加成功');
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
        $shops = Good::findOrFail($id);
        
        $shops->liulan += 1;
        $shops -> save();

        return view('home.shop.show', ['shops' => $shops]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取用户的信息
        $shops = Good::findOrFail($id);
        $cates = Cate::all();

        //解析模板显示数据
        return view('admin.shop.edit', ['shops' => $shops, 'cates' => $cates]);
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
        $shops = Good::findOrFail($id);

        //更新
        $shops -> name = $request->name;
        $shops -> price = $request->price;
        $shops -> sice = $request->sice;
        $shops -> cate_id = $request->cate_id;

        if ($request->hasFile('picture')) {
            $shops->picture = '/'.$request->picture->store('uploads/'.date('Ymd'));
        }

        if($shops->save()){
            return redirect('/shop')->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
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
        $shops = Good::findOrFail($id);

        if($shops->delete()){
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
