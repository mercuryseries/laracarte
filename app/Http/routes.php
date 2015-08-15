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

// Glide Image Processing routes...
get('img/{path}', function(League\Glide\Server $server, Illuminate\Http\Request $request){
	$server->outputImage($request);
})->where('path', '.*');


// OAuth Authentication Routes...
get('auth/github', 'Auth\AuthController@redirectToProvider');
get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');

// Static Pages Routes...
get('/', [
	'as'   => 'root_path',
	'uses' => 'PagesController@home'
]);

get('about', [
	'as'   => 'about_path',
	'uses' => 'PagesController@about'
]);

get('contact', [
	'as'   => 'contact_path',
	'uses' => 'PagesController@contact'
]);

post('contact', [
	'as'   => 'contact_path',
	'uses' => 'PagesController@postContact'
]);


// User routes...
get('artisans', [
	'as'   => 'artisans_path',
	'uses' => 'UsersController@index'
]);

get('@{username}', [
	'as'   => 'profile_path',
	'uses' => 'UsersController@profile'
]);

Route::group(['prefix' => 'account', 'middleware' => 'auth'], function(){
	get('/', [
		'as'   => 'account_path',
		'uses' => 'UsersController@account'
	]);

	get('/edit', [
		'as'   => 'edit_account_path',
		'uses' => 'UsersController@edit_account'
	]);

	patch('/', [
		'as'   => 'account_path',
		'uses' => 'UsersController@update_account'
	]);

	get('/set_password', [
		'as'   => 'new_password_path',
		'uses' => 'UsersController@new_password'
	]);

	patch('/set_password', [
		'as'   => 'new_password_path',
		'uses' => 'UsersController@update_password'
	]);
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', [
	'as'   => 'register_path',
	'uses' => 'Auth\AuthController@getRegister'
]);
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');