<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
	Route::auth();

	Route::get('/', [
		'as' => 'home',
		'uses' => 'HomeController@showHome'
	]);

	Route::get('/home', 'HomeController@index');

	Route::get('/oauth/{provider}', [
		'as' => 'oauth',
		'uses' => 'OauthController@redirectToProvider'
	]);

	Route::get('/like', 'HomeController@runLikes');

	Route::get('/oauth/{provider}/callback', 'OauthController@handleProviderCallback');




	Route::get('/foo', function () {
		$exitCode = Artisan::call('instagram:like', [
			'user' => '',
			'tags' => '',
		]);

		//
	});
});
