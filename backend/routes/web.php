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
Route::get('/task/edit', 'TaskController@edit')->name('task_new');
Route::get('/task/edit/{id}', 'TaskController@edit')->name('task_edit');
Route::post('/task/edit', 'TaskController@edit')->name('task_post');
Route::delete('/task/{id}', 'TaskController@destroy')->name('task_destroy');

// カテゴリ設定
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/category/edit', 'CategoryController@edit')->name('category_edit');
Route::post('/category/edit', 'CategoryController@edit')->name('category_post');

// 配色設定
Route::get('/color', 'ColorController@index')->name('color');
Route::get('/color/edit', 'ColorController@edit')->name('color_edit');
Route::post('/color/edit', 'ColorController@edit')->name('color_post');
