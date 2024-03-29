<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PostController@index']);
Route::get('/{id}', ['as' => 'post', 'uses' => 'PostController@show']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => "admin", 'middleware' => 'auth'], function(){
// Route::group(['prefix' => "admin"], function(){
	Route::resource("posts","AdminPostController");
	Route::resource("categories","CategoryController");
});

