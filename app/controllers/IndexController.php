<?php

class IndexController extends BaseController{
	public function get(){
		return View::make('home');
	}
	public function post(){
		$username = Input::get('username');
		$password = Input::get('password');

		if(Auth::attempt(array(
			'username' => $username, 
			'password' => $password))){

			return 'Logged in';


		} else {

			Redirect::to('/login')->withInput();

		}
	}

}