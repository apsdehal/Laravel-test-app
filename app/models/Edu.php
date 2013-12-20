<?php

class Edu extends Eloquent {
	protected $guarded = array('user_id');

	public static $rules = array();

	public static function showEdu($user){

		$edus = $user->getEdu();

		return General::getStringForMany($edus);
	}
}
