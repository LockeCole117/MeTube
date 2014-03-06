<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('/signin', function()
{
	return View::make('signin');
});

Route::get('/register', function()
{
	return View::make('register');
});

Route::get('/search', 'SearchController@index');

Route::get('/upload', 'UploadController@index');

Route::post('/upload_post', 'MediaController@upload');

Route::get('/channel', 'ChannelController@index');