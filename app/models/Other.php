<?php

class Other extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','other_id');

	public static $rules = array();

	public static function showOther($user){

		$others = $user->getOther();

		return General::getStringForMany($others);
	}
}
