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


//路由群组
Route::group(['middleware'=>'adminlogin'],function(){
<<<<<<< HEAD

//后台主页
Route::get('/admin/user/add','Admin\UserController@add');

Route::get('/admin/index','Admin\IndexController@index');

Route::post('/admin/user/insert','Admin\userController@insert');

Route::get('/admin/user/edit/{id}',"Admin\UserController@edit");

Route::post('/admin/user/update',"Admin\UserController@update");

Route::get('/admin/user/delete/{id}',"Admin\UserController@del");

Route::get('/admin/user/index',"Admin\UserController@index");


//网站配置
Route::get('/admin/pz','Admin\PeiZhiController@pz');
Route::get('/admin/wzxg','Admin\PeiZhiController@xg');
Route::post('/admin/wzxg','Admin\PeiZhiController@doxg');
Route::get('/admin/peizhi/pz','Admin\PeiZhiController@pz');



//广告管理

//广告添加
Route::get('/admin/gg','Admin\GuangGaoController@gg');

//广告列表
Route::get('/admin/gg/list','Admin\GuangGaoController@list');

//广告删除
Route::get('/admin/gg/del/{id}','Admin\GuangGaoController@del');

//广告的修改
Route::get('/admin/gg/xg','Admin\GuangGaoController@xg');

Route::post('/admin/gg/xg','Admin\GuangGaoController@doxg');

=======
	//后台主页
	Route::get('/admin/user/add','Admin\UserController@add');
	Route::get('/admin/index','Admin\IndexController@index');
	Route::post('/admin/user/insert','Admin\userController@insert');


	Route::get('/admin/user/edit/{id}',"Admin\UserController@edit");
	Route::post('/admin/user/update',"Admin\UserController@update");
	Route::get('/admin/user/delete/{id}',"Admin\UserController@delete");
	Route::get('/admin/user/index',"Admin\UserController@index");
>>>>>>> 2e3fc6b53cb106d497c0f15cc6821f965d30e671
});



//登录
Route::get('/admin/login',"Admin\LoginController@login");
Route::post('/admin/dologin',"Admin\LoginController@dologin");
Route::get('/admin/logout',"Admin\LoginController@logout");


//验证码
Route::get('/kit/captcha/{tmp}', 'Admin\KitController@captcha');


//ajax操作
Route::post('/admin/user/ajaxrename','Admin\UserController@ajaxRename');

//分类管理
Route::resource('/admin/category',"Admin\categoryController");

<<<<<<< HEAD
=======
//发送邮件
Route::get('/send','Admin\MailController@send');

//忘记密码功能,
Route::get('/admin/forgot','Admin\ForgotController@forgot');
Route::post('/admin/sendemail','Admin\ForgotController@sendemail');
Route::get('/admin/link/{token}','Admin\ForgotController@link');
Route::get('/admin/newpass/{id}','Admin\ForgotController@newpass');
Route::get('/admin/info','Admin\ForgotController@info');
Route::post('/admin/updatepass','Admin\ForgotController@updatepass');


//前台模块

//搜索功能
Route::get('/home/se','Home\SeController@index');
Route::post('/home/dose','Home\SeController@dose');
<<<<<<< HEAD


//前台登录
Route::get('/home/login','Home\LoginController@login');
Route::post('/home/dologin','Home\LoginController@dologin');

//前台注册
Route::get('/home/regist','Home\RegistController@regist');

//伪 -前台主页
Route::get('/home/index','Home\IndexController@index');
=======
>>>>>>> 2e3fc6b53cb106d497c0f15cc6821f965d30e671
>>>>>>> e504c883d609d43960106262f2cbe6b2971c9a21
