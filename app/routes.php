<?php

//首页
Route::get('/', "HomeController@index");

//文章列表
Route::get('passage', "PassageController@passagelist");

//文章详情
Route::get('passage/{url}', "PassageController@passage");

//后台登陆页面
Route::get('login', "LoginController@index");
Route::get('admin', "LoginController@index");

//后台登陆方法
Route::post('verify', array('before' => 'csrf', 'uses' => 'LoginController@verify'));

//后台退出
Route::get('logout', "LoginController@logout");

//后台文章管理

//文章管理列表页面
Route::get('admin/passage', array('before' => 'auth', 'uses' => "PassageManageController@index"));

//发表文章页面
Route::get('admin/passage/create', array('before' => 'auth', 'uses' => "PassageManageController@publishPassage"));

//修改文章页面
Route::get('admin/passage/{url_path}', array('before' => 'auth', 'uses' => "PassageManageController@editPassage"));

//发表文章方法
Route::post('admin/createPassage', array('before' => 'auth', 'uses' => "PassageManageController@createPassage"));//TODO:get->post

//修改文章方法
Route::post('admin/getNewPassage', array('before' => 'auth', 'uses' => "PassageManageController@getNewPassage"));//TODO:get->post

//ajax预览文章
Route::get('admin/viewPassage', array('before' => 'auth', 'uses' => "PassageManageController@viewPassage"));//TODO:get->ajax

//删除文章
Route::get('admin/PassageDelete/{url_path}', array('before' => 'auth', 'uses' => "PassageManageController@deletePassage"));

//首页图片轮播管理
Route::get('admin/img', array('before' => 'auth', 'uses' => "ImgManageController@index"));

