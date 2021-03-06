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

use App\Setting;

$adminMiddleware = ['auth'];
$force_ssl = Schema::hasTable('settings')? Setting::find('force_ssl') : false;
if ($force_ssl && ($force_ssl->value == 'true' || $force_ssl->value == '1')) {
    array_push($adminMiddleware, 'ssl.force');
}

Route::group([
    'middleware' => $adminMiddleware,
    'prefix' => 'admin'
], function() {
    Route::get('/', 'AdminController@index');

    Route::get('phpinfo', function () {
        return phpinfo();
    });

    Route::resource('post', 'PostController', ['except' => ['show']]);
    Route::resource('category', 'CategoryController', ['except' => ['show', 'create']]);
    Route::resource('comment', 'CommentController', ['only' => ['index', 'update', 'destroy']]);
    Route::resource('setting', 'SettingController', ['only' => ['index', 'store']]);
    Route::get('appearance', function () {
        return view('admin.appearance');
    });
    Route::get('under_construction', function () {
        return view('admin.UnderConstruction');
    });
    // Route::get('post', 'PostController@index');
    // Route::get('post/create', 'PostController@create');
    // Route::post('post', 'PostController@store');
    // Route::post('post/{id}/edit', 'PostController@edit');
    // Route::put('post/{id}', 'PostController@update');
    // Route::delete('post/{id}', 'PostController@destroy');
});

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'ssl.prevent'], function() {
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::resource('comment', 'CommentController', ['only' => ['index', 'store']]);
    Route::get('{category}', 'CategoryController@show');
    Route::get('{category}/{post}', 'PostController@show');
});