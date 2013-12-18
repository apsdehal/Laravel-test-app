<?php

class Other extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public static function showOther($user){

		$others = $user->getOther();

		return General::getStringForMany($others);
	}
}
