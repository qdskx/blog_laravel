<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index.index');
});
Route::any('/','Index\IndexController@index');
// 搜索
Route::any('index/search','Index\IndexController@search');
// 文章
Route::any('index/article','Index\IndexController@article');
// 查看文章
Route::any('index/show','Index\IndexController@show');
Route::any('index/send','Index\IndexController@send');
// 留言
Route::any('index/message','Index\IndexController@message');
Route::any('index/domespost','Index\IndexController@domespost');
// 发表文章
Route::any('index/artpost','Index\IndexController@artpost');
Route::any('index/doartpost','Index\IndexController@doartpost');
// 用户中心
Route::any('index/set','Index\IndexController@set');
// 修改头像
Route::any('index/head','Index\IndexController@head');
Route::any('index/dohead','Index\IndexController@dohead');
// 修改密码
Route::any('index/password','Index\IndexController@password');
Route::any('index/dopass','Index\IndexController@dopass');
// 修改资料
Route::any('index/data','Index\IndexController@data');
Route::any('index/dodata','Index\IndexController@dodata');
// 修改个签
Route::any('index/autograph','Index\IndexController@autograph');
Route::any('index/doautograph','Index\IndexController@doautograph');
// 注册
Route::any('index/register','Index\UserController@register');
Route::any('index/doRegister','Index\UserController@doRegister');
// 登录
Route::any('index/login','Index\UserController@login');
Route::any('index/doLogin','Index\UserController@doLogin');
// 退出
Route::any('index/exit','Index\UserController@exit');

// 后台
// 用户管理
Route::any('admin/user','Admin\IndexController@user');
Route::any('admin/deluser','Admin\IndexController@deluser');
// 文章管理
Route::any('admin/art','Admin\IndexController@art');
Route::any('admin/delart','Admin\IndexController@delart');
// 回复管理
Route::any('admin/rev','Admin\IndexController@rev');
Route::any('admin/delrev','Admin\IndexController@delrev');
// 留言管理
Route::any('admin/mess','Admin\IndexController@mess');
Route::any('admin/delmess','Admin\IndexController@delmess');
// 登录
Route::any('admin/login','Admin\IndexController@login');
Route::any('admin/doLogin','Admin\IndexController@doLogin');
// 退出
Route::any('admin/exit','Admin\IndexController@exit');