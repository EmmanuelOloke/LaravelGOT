<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/logout', function () {
    Auth::logout();

    return redirect('/');
});

Route::get('/contact', 'HomeController@contact');

Route::get('/about', 'PagesController@about');

Route::get('/', 'ListController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/got/public', 
	[
		'middleware' => ['auth'],
		'uses' => function()
		{
			echo "You are allowed to see this page!";
		}
	]);
