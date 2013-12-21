<?php

class Interest extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','work_id');

	public static $rules = array();

	public static function showInterest($user){

		$interests = $user->getInterests();

		return General::getStringForOne($interests);

	}
}
