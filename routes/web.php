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

Route::get('/', 'HomeController@index');

Route::get('login', function(){
	return view('auth.login');
});

Route::get('logout', function(){
	return "Logout de Usuario";
});

Route::get('catalog', 'CatalogController@index');

Route::get('catalog/show/{id}', 'CatalogController@show');

Route::get('catalog/create', 'CatalogController@create');
Route::get('catalog/edit/{id}', 'CatalogController@edit');
