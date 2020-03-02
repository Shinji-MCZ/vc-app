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

// Route::<HTTPメソッド>('<アドレス>', '<コントローラ名@アクション名>');
Route::get('message/hello', 'MessageController@hello');
//goodと表示
Route::get('message/good', 'MessageController@good');
//自分の名前表示
Route::get('introduction/name', 'IntroductionController@name');
