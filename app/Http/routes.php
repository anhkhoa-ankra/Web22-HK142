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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function()
{
    Route::get('/', 'AdminController@index');
    Route::get('post/create', 'PostController@create');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::get('{category}', 'CategoryController@show');
Route::get('{category}/{post}', 'PostController@show');
