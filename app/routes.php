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

Route::get('user/create', function(){
			if(Auth::check()){ 
				return View::make('user-create');
			} else {
				// figure out how to post message
				return 'You must be logged in to access this area';
				//$users = User::all();
				//return View::make('users')->with('users', $users);
			}
		});

Route::get('user/{id}', 'UserController@showProfile');

Route::post('user/create', 'UserController@processNew');
//

// Blog Routes
Route::get('blogs', function(){
	$blogs = Blog::all();
	return View::make('blog-listing')->with('blogs', $blogs);
});

Route::get('blog/create', function(){
	return View::make('blog-create');
});

Route::post('blog/create', 'BlogController@processNew');

//