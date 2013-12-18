<?php

class Edu extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public static function showEdu($user){
		
		$edus = $user->getEdu();

		return General::getStringForMany($edus);	
	}
}
