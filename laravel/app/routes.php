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

Route::get('/',array('as'=>'home', function()
{
	return View::make('game');
}));

//Route::get('users','UserController@displayAllUsers');

Route::get('users/', array('as' => 'users', 'uses' => 'UserController@showAllUsers'));
//Route::get('user/{id}',array('as'=>'user','uses'=>'UserController@viewUser'));


// Route group for API versioning
Route::group(array('prefix' => 'api'), function()
{
    Route::resource('user', 'UrlController');
});

//
Route::post('login', function () {
        $user = array(
            'username' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        if (Auth::attempt($user)) {
            return Redirect::route('home')
                ->with('flash_notice', 'You are successfully logged in.');
        }
        
        // authentication failure! lets go back to the login page
        return Redirect::route('login')
            ->with('flash_error', 'Your username/password combination was incorrect.')
            ->withInput();
});


Route::get('logout',array('as'=>'logout', function () {
        Auth::logout();
        return Redirect::route('home');
            
}));



Route::get('login', array('as' => 'login', function () {
    return View::make('login')->with('title','Login');
}))->before('guest');

Route::get('register',array('as'=>'register', function () {
      
        return Redirect::to('api/user');
            
}));