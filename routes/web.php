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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/l', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//user routes
Route::get('/admin/user', 'UserController@index');
Route::get('/admin/user/create', 'UserController@create');
Route::post('/admin/user/store', 'UserController@store');
Route::get('/admin/user/view/{id}', 'UserController@userview');
Route::get('/admin/user/edit/{id}', 'UserController@edit');
Route::post('/admin/user/edit/update/{id}', 'UserController@update');
Route::get('/admin/user/edit/pwd/{id}', 'UserController@editpwd');
Route::post('/admin/user/edit/pwd/update/{id}', 'UserController@updatepwd');

//post routes
Route::get('/admin/post', 'PostsController@viewpost');
Route::get('/admin/post/create', 'PostsController@home');
Route::post('/admin/post/store', 'PostsController@store');
Route::get('/admin/post/view/{id}', 'PostsController@view');
Route::get('/admin/post/edit/{id}', 'PostsController@edit');
Route::post('/admin/post/update/{id}', 'PostsController@update');

//frontend routes
Route::get('/', 'FrontController@index');
Route::get('/post/view/{id}', 'FrontController@view');

//frontend register page
Route::get('signup', 'FrontController@regview');
Route::post('signup/store', 'FrontController@regstore');

//frontend register routes
Route::get('/user', 'RegisterUserController@index');
Route::get('user/post/view/{id}', 'RegisterUserController@view');
Route::post('comment/add/{id}', 'RegisterUserController@commentadd');

