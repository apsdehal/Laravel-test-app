<?php

class LogController extends BaseController{

	public function getLogin(){

		$passedValue = null;

		if(Cookie::get('username')){
			$passedValue = Cookie::get('username');
		}
		else if(Input::old('username')){
			$passedValue = Input::old('username');
		}

		return View::make('login')->with('value', $passedValue);
	
	}

	public function postLogin(){
		$username = Input::get('username');
		$password = Input::get('password');

		if( Auth::attempt(array(
			'username' => $username, 
			'password' => $password ))){

			return Redirect::to('/');

		} else {

			return Redirect::to('/login')->withInput();

		}
	}
}