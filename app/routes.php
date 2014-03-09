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

Route::get('users', function(){
	$users = User::all();
	return View::make('users')->with('users', $users);
});

Route::get('user/create', 'UserController@createNew');

Route::get('user/{id}', 'UserController@showProfile');

Route::post('user/create', 'UserController@processNew');

Route::get('login', function(){
	return View::make('user_login');
});

Route::post('login_check', function(){
	$email = Input::get('email');
	$password = Input::get('password');
	if (Auth::attempt(array('email' => $email, 'password' => $password))){
    	return Redirect::intended('/users');
	} else {
		echo "login failed";
	}
});

Route::get('blog_listing', function(){
	$blogs = Blog::all();
	return View::make('blog_listing')->with('blogs', $blogs);
});

Route::get('blog_create', function(){
	return View::make('blog_create');
});
