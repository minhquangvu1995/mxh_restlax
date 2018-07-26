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
//    Tính năng mới thứ 1 đã xong, đẩy vào dev thôi
//    Merge vào dev bị lỗi, fix conflict cái đã
//    Fix lỗi ở bản release-1.0
//    Merge vào master bị conflict, fix luôn
//    Tạo nhánh hotfix-1.0.1 để fix lỗi đang lỗi trên master
//    Tính năng mới thứ 2 , merge sang dev
//    Hotfix 1.1.1
//    Hotfix 1.1.2
});
