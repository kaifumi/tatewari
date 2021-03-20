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

//  認証
Auth::routes();

// ホーム
Route::get('/home', 'HomeController@index')->name('home');

// タスク
Route::get('/task', 'TaskController@index')->name('task');
