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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/test', 'SampleTestCntroller@index')->name('test');
Route::get('sample/mailable/send', 'SampleController@SampleTest');



// バリデーション
// アクセス時のルーティング
Route::get('sample/vali', 'ValiController@index');
// フォーム送信時のルーティング
//Route::post('sample/vali', 'ValiController@receiveData');
//確認画面のルーティング
Route::post('sample/vali/confirm', 'ValiController@confirm');
// 完了画面のルーティング
Route::post('sample/vali/complete', 'ValiController@complete');
