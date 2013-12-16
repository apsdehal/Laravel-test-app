<?php

class LogController extends BaseController{

	public function showLogin(){

		$passedValue = null;

		if(Cookie::get('username')){
			$passedValue = Cookie::get('username');
		}
		else if(Input::old('username')){
			$passedValue = Input::old('username');
		}

		return View::make('login')->with('value', $passedValue);
	}

}