<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin/login/', function() {
    return view('admin/login');
});

Route::get('/admin/item/list', 'ItemController@list');

Route::get('/admin/item/regist', function() {
    return view('admin/item/regist');
});

Route::get('/admin/item/remove', function() {
    return view('admin/item/remove');
});

Route::get('/admin/item/edit', function() {
    return view('admin/item/edit');
});

Route::get('/users', 'UserController@index');

Route::post('/item/regist/update', 'ItemController@regist_update');
