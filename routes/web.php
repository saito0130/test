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
// Route::get('URLのパス', 'コントローラー名@ファンクション名')
Route::get('calc/index','CalcController@tasu');

Route::post('calc/index','CalcController@index');
// Route::post('calc/index','CalcController@hiku');