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



//Route::get("admin","Admin\IndexController@index");
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/',"Admin\IndexController@index" );
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
    Route::get('/cmt','Admin\Film_cmtController@index');  //影评
    Route::get('/cmt/del/{id}','Admin\Film_cmtController@delete');  //影评
    Route::get('/cmt/edit/{id}','Admin\Film_cmtController@edit');  //影评 
    Route::post('/cmt/update','Admin\Film_cmtController@update');

    Route::get("/logout","Admin\LoginController@logout");
    Route::get("/user_vip","Admin\User_vipController@index");

    Route::get("/ad","Admin\AdController@index");  
    Route::get("/log","Admin\LogController@index");

    Route::get("/user_film","Admin\User_filmController@index");//用户视频中间表
    Route::get("/logins","Admin\LoginsController@login");//登录信息

    Route::get('/film_info','Admin\Film_infoController@index');  //视频信息
    Route::get('/qiniu_info','Admin\Qiniu_infoController@index'); //七牛信息
	

    Route::get("/add","Admin\AdController@create");
    Route::post("/role","Admin\AdController@store");


});

//前台路由
Route::get("/dydetails","Home\DydetailsController@index");
Route::group(['prefix' => 'home','middleware' => 'home'], function () {
    Route::get('/',"Home\IndexController@index");
    

});

