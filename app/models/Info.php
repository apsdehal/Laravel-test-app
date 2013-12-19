<?php

class Info extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public static function showInfo($user){

		$infos = $user->getInfo();

		return General::getStringForOne($infos);

	}


}
