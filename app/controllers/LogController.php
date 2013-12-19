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

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getSignup()
	{
        return View::make('users.signup');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postStore()
	{
		$input = Input::all();

		$rules = array(
			'username'	=> 'required|unique:users',
			'password'	=> 'required|same:password2',
			'email'		=> 'required|email',
			'first_name'=> 'required',
			'last_name'	=> 'required',
			);

		$messages = array(
			'same'	=> "Passwords don't match",
			);

		$validator = Validator::make($input, $rules, $messages);

		if($validator->passes()){

			$user = User::createUser(Input::except('password2'));
			Auth::login($user);
			return Redirect::to('/');

		} else {

			return Redirect::to('signup')->withErrors($validator)->withInput(Input::except('password','password2'));

		}

	}
}