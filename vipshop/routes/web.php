
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
Route::get('/admin/settings', 'AdminController@setting');
Route::post('/admin/settings', 'AdminController@update');
//商品
Route::resource('shop','ShopController');

//用户
Route::resource('user','Usercontroller');

//属性值表
Route::resource('vpro','VproController'); 

//属性表
Route::resource('pro','ProController');

//分类
Route::resource('cate','CateController');

//友情链接
Route::resource('link','LinkController');

//商品发布作者
Route::resource('author','AuthorController');

//后台广告
Route::resource('guanggao','GuanggaoController');

//登陆页面
Route::get('/admin/login', 'AdminController@login');

//登陆操作
Route::post('/admin/login', 'AdminController@dologin');
//退出登录的路由
Route::get('/admin/logout','AdminController@logout');




//前台路由
//商品详情
Route::get('/{id}.html', 'ShopController@show');

//商品列表
Route::get('/shops', 'ShopController@list');



//在定

//评论
Route::resource('pinglun','PinglunController');

//收货地址
Route::resource('address','AddressController');

//订单详情表
Route::resource('det','DetController');

// 购物车
Route::resource('scar','ScarController');