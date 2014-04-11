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

Route::get('/', function()
{
	return View::make('game');
});


//Route::get('users','UserController@displayAllUsers');

Route::get('users/', array('as' => 'users', 'uses' => 'UserController@showAllUsers'));
Route::get('user/{id}',array('as'=>'user','uses'=>'UserController@viewUser'));



Route::group(array('prefix' => 'api/create/'), function()
{
    Route::resource('user', 'UrlController');
});

// Route group for API versioning
Route::group(array('prefix' => 'api/', 'before' => 'auth.basic'), function()
{
    Route::resource('user', 'UrlController');
});