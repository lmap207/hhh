
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 后台路由
     // 后台首页
 Route::get('/admin','AdminController@index');
      // 设置
 Route::get('/admin/setting','AdminController@setting');
 	//商品
 Route::resource('shop','ShopController');
    //评论
 Route::resource('pinglun','PinglunController');
   //收货地址
 Route::resource('address','AddressController');
    //订单详情表
 Route::resource('det','DetController');
    //属性值表
 Route::resource('vpro','VproController'); 
    //属性表
 Route::resource('pro','ProController');
    // 商品评价
  Route::resource('eva','EvaController');
  //分类
  Route::resource('cate','CateController');
  // 购物车
  Route::resource('scar','ScarController');
   //友情链接
  Route::resource('link','LinkController');
  //登陆页面
  Route::get('/admin/login', 'AdminController@login');
  //登陆操作
  Route::post('/admin/login', 'AdminController@dologin');

  

