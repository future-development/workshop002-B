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
Route::get('/', 'ImageController@index');
Route::post('upload', 'ImageController@upload');
Route::get('upload', 'ImageController@index'); //エラー用
// DetectTextFromImage
Route::post('detect', 'ImageController@detect');
Route::get('detect', 'ImageController@index');