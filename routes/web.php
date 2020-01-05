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
    return view('admin.layouts.app');
});
// Route::get('/test/{id}', function($id){
// 	return 'Hello '. $id;
// });
Route::get('/test/{name?}', function($name = 'jon snow'){
	return 'Hello '. $name;
});

// Category
Route::get('category', 'CategoryController@index');
Route::get('category/create', 'CategoryController@create');
Route::post('category/store', 'CategoryController@store');

Route::get('category/edit/{id}', 'CategoryController@edit');
Route::post('category/update/{id}', 'CategoryController@update');

Route::get('category/delete/{id}', 'CategoryController@delete');

// Article
Route::get('article', 'ArticleController@index');
Route::get('article/create', 'ArticleController@create');
Route::post('article/store', 'ArticleController@store');

Route::get('article/edit/{id}', 'ArticleController@edit');
Route::post('article/update/{id}', 'ArticleController@update');

Route::get('article/delete/{id}', 'ArticleController@delete');

// User 
Route::get('user', 'UserController@index');
Route::get('user/create', 'UserController@create');
Route::post('user/store', 'UserController@store');

Route::get('user/edit/{id}', 'UserController@edit');
Route::post('user/update/{id}', 'UserController@update');

Route::get('user/delete/{id}', 'UserController@delete');