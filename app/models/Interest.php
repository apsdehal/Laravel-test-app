<?php

class Interest extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public static function showInterest($user){

		$interests = $user->getInterests();

		return General::getStringForOne($interests);

	}
}
