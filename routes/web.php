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



//后台路由



Route::get("/login","Admin\LoginController@index");
Route::get("admin/getcode","Admin\LoginController@getCode");//加载验证码
Route::post("admin/dologin","Admin\LoginController@dologin");

    //Route::resource('/admin/ad', 'Admin\AdController');

//Route::get("admin","Admin\IndexController@index");
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/',"Admin\IndexController@index" );
    //前台用户路由
    Route::get("/user","Admin\UserController@index");

    Route::get("/userlog","Admin\UserLogController@index");
    //分类模块路由
    Route::get('/type','Admin\Film_typeController@index'); //分类管理
    Route::post('/type/del/{id}','Admin\Film_typeController@delete')->where('id','\d+'); //删除分类
    Route::post('/type/edit/{id}','Admin\Film_typeController@edit')->where('id','\d+');  //编辑分类
    Route::post('/type/update','Admin\Film_typeController@update'); //更新修改
    Route::get('/type/create','Admin\Film_typeController@create');//添加分类
    Route::post('/type/info','Admin\Film_typeController@info');


    //影评模块路由
    Route::get('/cmt/{id?}','Admin\Film_cmtController@index');  //影评
    Route::get('/cmt/del/{id}','Admin\Film_cmtController@delete');  //影评
    Route::get('/cmt/edit/{id}','Admin\Film_cmtController@edit');  //影评 
    Route::post('/cmt/update','Admin\Film_cmtController@update');

    Route::get("/logout","Admin\LoginController@logout");
    Route::get("/user_vip","Admin\User_vipController@index"); //VIP用户管理
    Route::resource('/user_vip', 'Admin\User_vipController');

    

    Route::get("/user_film","Admin\User_filmController@index");//用户视频中间表
    Route::get("/logins","Admin\LoginsController@login");//登录信息


    Route::resource('/admin/ad', 'Admin\AdController');//广告
    Route::resource('/admin/log', 'Admin\LogController');//日志
    //Route::get('/ddd/ad','Admin\AdController@index');

    
	

    Route::resource('/film_info','Admin\Film_infoController');//视频信息
    Route::resource('/qiniu_info', 'Admin\Qiniu_infoController');//七牛信息
    

    Route::get("/add","Admin\AdController@create");
    Route::post("/role","Admin\AdController@store");
    Route::resource('/user', 'Admin\UserController');


});

//前台路由
Route::get("home/user/zhanghu","Home\UserController@zhanghu");
Route::get("home/user/jilu","Home\UserController@jilu");
Route::get("home/user/huiyuan","Home\UserController@huiyuan");
Route::get("home/user/zhifu","Home\UserController@zhifu");
Route::post("home/userdetail/update","Home\UserController@update");
Route::post("home/userdetail/store","Home\UserController@store");


Route::get("/dydetails","Home\DydetailsController@index");
Route::get("/dydetails/{id}","Home\DydetailsController@index");
Route::group(['prefix' => 'home','middleware' => 'home'], function () {
    Route::get('/',"Home\IndexController@index");
    Route::get('/xq/{id}',"Home\XqController@index");
    Route::get('/HomeLog/indexs',"Home\HomeLogController@indexs");
    Route::get('/homeLog/logout',"Home\HomeLogController@logout"); //执行退出
    Route::get('/HomeLog/index','Home\HomeLogController@index');
    Route::post('/HomeLog/register','Home\HomeLogController@register');
    Route::get('/user/{id}',"Home\UserController@index");

    //Route::get('home/vipuser/',"Home\VipuserController@index");
    Route::get('home/vipuser/',"Home\VipuserController@index");
    Route::get('/ad', 'Home\AdController@index');//广告


});

Route::post('/home/sendMobileCode','Home\HomeRegisterController@sendMobileCode');
Route::post('/home/createUser','Home\HomeRegisterController@createUser');
Route::get('/home/register','Home\HomeRegisterController@index');
Route::get('/home/login','Home\HomeLogController@index');
Route::get('/home/sendSms','Home\HomeRegisterController@sendSms');
Route::post('/HomeLog/doLogin','Home\HomeLogController@doLogin');
//Route::get('/home/','');


// Route::get('home/vipuser',function(){
//     return "aa";
// });
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


//富文本编辑器测试
Route::get('/upload', 'UploadController@index');


Route::post('/upload', 'UploadController@uploads');

