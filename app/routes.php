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

Route::get('/', function(){
	return View::make('hello');
});

// Auth Protected Routes
Route::group(array('before' => 'auth'), function(){
	Route::get('user/create', 'UserController@createNew');

	Route::post('user/create', 'UserController@processNew');

	Route::get('blog/create', function(){
		return View::make('blog-create');
	});

	Route::post('blog/create', 'BlogController@processNew');
});

// Login Routes
Route::get('login', function(){
	return View::make('user-login');
});

Route::post('login-check', function(){
	$email = Input::get('email');
	$password = Input::get('password');
	if (Auth::attempt(array('email' => $email, 'password' => $password))){
    	return Redirect::intended('/users');
	} else {
		echo "login failed";
	}
});
//

// User routes
Route::get('users', function(){
	$users = User::all();
	return View::make('users')->with('users', $users);
});

Route::get('user/{id}', 'UserController@showProfile');
//


// Blog Routes
Route::get('blogs', function(){
	$blogs = Blog::all();
	return View::make('blog-listing')->with('blogs', $blogs);
});
//
