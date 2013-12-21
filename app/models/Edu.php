<?php

class Edu extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','edu_id');

	public static $rules = array();

	public static function showEdu($user){

		$edus = $user->getEdu();

		return General::getStringForMany($edus);
	}
}
