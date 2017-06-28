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

Route::get("/login","Admin\LoginController@index");
Route::get("admin/getcode","Admin\LoginController@getCode");//加载验证码
Route::post("admin/dologin","Admin\LoginController@dologin");
//Route::get("admin","Admin\IndexController@index");
Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::get('/',"Admin\IndexController@index" );
    Route::get("/user","Admin\UserController@index");
    Route::get("/userlog","Admin\UserLogController@index");
    Route::get("/logout","Admin\LoginController@logout");
    Route::get("/user_vip","Admin\User_vipController@index");

});
