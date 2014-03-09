<?php

class UserController extends BaseController {

	/**
	 * Show the profile of the given user
	 */
	public function showProfile($id){
		$user = User::find($id);
		return View::make('user_profile', array('user'=> $user));
	}

	/**
	 * Form to create a new user
	 */
	public function createNew(){
		return View::make('user_create');
	}

	/**
	 * Insert New information to the DB
	 */
	public function processNew(){
		// get variables
		$name = Input::get('name');
		$email = Input::get('email');
		$password = Input::get('password');
		$password = Hash::make($password);

		// use variables for a new entry
		$user = new User;
		$user->name = $name;
		$user->email = $email;
		$user->password = $password;
		$user->save();

		// show user listing.
		$users = User::all();
		return View::make('users')->with('users', $users);
	}
}