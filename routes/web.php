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

//Trang chủ
Route::get('/', 'ChuDeController@index');
//Danh sách bài tập của chủ đề
Route::get('/chu_de/{id}','ChuDeController@show');

