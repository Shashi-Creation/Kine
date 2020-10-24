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

//user routes
Route::get('/admin/user', 'UserController@index');
Route::get('/admin/user/create', 'UserController@create');
Route::post('/admin/user/store', 'UserController@store');
Route::get('/admin/user/view/{id}', 'UserController@view');
Route::get('/admin/user/edit/{id}', 'UserController@edit');
Route::post('/admin/user/edit/update/{id}', 'UserController@update');