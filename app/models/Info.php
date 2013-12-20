<?php

class Info extends Eloquent {
	protected $guarded = array();

	protected $table = 'infos';

	public static $rules = array();

	public static function showInfo($user){

		$infos = $user->getInfo();

		return General::getStringForOne($infos);

	}


}
