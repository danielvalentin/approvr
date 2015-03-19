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

Route::get('/', 'PageController@index');

// User stuff
Route::get(trans('routes.user.login'),array(
	'as' => 'userLogin',
	'uses' => 'Auth\UserAuthController@getLogin'
));
Route::post(trans('routes.user.login'),array(
	'as' => 'userLoginPost',
	'uses' => 'Auth\UserAuthController@postLogin'
));
Route::get(trans('routes.user.logout'),array(
	'as' => 'userLogout',
	'uses' => 'Auth\UserAuthController@getLogout'
));
Route::get(trans('routes.user.signup'),array(
	'as' => 'userSignup',
	'uses' => 'Auth\UserAuthController@getRegister'
));
Route::post(trans('routes.user.signup'),array(
	'as' => 'userSignupPost',
	'uses' => 'Auth\UserAuthController@postRegister'
));
Route::group(array('middleware' => 'auth'), function(){
	Route::get(trans('routes.user.home'),array(
		'as' => 'userHome',
		'uses' => 'UserController@index'
	));
});
