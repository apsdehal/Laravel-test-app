<?php

class IndexController extends BaseController{
	public function showIndex(){
		return View::make('home');
	}

	public function LogOut(){
		
		if(Auth::check()){
			User::LogOut();
		}	

		return Redirect::to('/');
		 
	}
	
}