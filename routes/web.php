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

//////////////////////////////////////Admin//////////////////////////////////////////////////
Route::group(['middleware' => 'App\Http\Middleware\AdminCheck'], function()
{ 

Route::get('/admin/user', 'UserController@index');
Route::get('/admin/user/create', 'UserController@create');
Route::post('/admin/user/store', 'UserController@store');
Route::get('/admin/user/view/{id}', 'UserController@userview');
Route::get('/admin/user/edit/{id}', 'UserController@edit');
Route::post('/admin/user/edit/update/{id}', 'UserController@update');
Route::get('/admin/user/edit/pwd/{id}', 'UserController@editpwd');
Route::post('/admin/user/edit/pwd/update/{id}', 'UserController@updatepwd');

//post routes(Admin)
Route::get('/admin/post', 'PostsController@viewpost');
Route::get('/admin/post/create', 'PostsController@home');
Route::post('/admin/post/store', 'PostsController@store');
Route::get('/admin/post/view/{id}', 'PostsController@view');
Route::get('/admin/post/edit/{id}', 'PostsController@edit');
Route::post('/admin/post/update/{id}', 'PostsController@update');

//Visitor Count
Route::get('admin/visitor/count', 'ReportController@view');
Route::get('admin/post/count', 'ReportController@postview');
});
//////////////////////////////////////End Admin///////////////////////////////////////////////////


//////////////////////////////////////Author//////////////////////////////////////////////////////
Route::group(['middleware' => 'App\Http\Middleware\AdminCheck'], function()
{ 
Route::get('/author/user', 'UserController@index');
//post routes(Author)
Route::get('/author/post', 'AuthorPostController@viewpost');
Route::get('/author/post/create', 'AuthorPostController@home');
Route::post('/author/post/store', 'AuthorPostController@store');
Route::get('/author/post/view/{id}', 'AuthorPostController@view');
Route::get('/author/post/edit/{id}', 'AuthorPostController@edit');
Route::post('/author/post/update/{id}', 'AuthorPostController@update');

//report
Route::get('admin/visitor/count', 'ReportController@view');
Route::get('admin/post/count', 'ReportController@postview');

});
//////////////////////////////////////End Author///////////////////////////////////////////////////



//////////////////////////////////////loged user//////////////////////////////////////////////////////
Route::group(['middleware' => 'App\Http\Middleware\AdminCheck'], function()
{ 
//frontend register routes
Route::get('/user', 'RegisterUserController@index');
Route::get('user/post/view/{id}', 'RegisterUserController@view');
Route::post('comment/add/{id}', 'RegisterUserController@commentadd');

});
//////////////////////////////////////End Author///////////////////////////////////////////////////


//frontend routes
Route::get('/', 'FrontController@index');
Route::get('/post/view/{id}', 'FrontController@view');

//frontend register page
Route::get('signup', 'FrontController@regview');
Route::post('signup/store', 'FrontController@regstore');






