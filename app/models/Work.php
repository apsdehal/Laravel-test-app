<?php

class Work extends Eloquent {
	protected $guarded = array();

	protected $table = 'works';

	public static $rules = array();

	public static function showWork($user){

		$works = $user->getWork();

		return General::getStringForMany($works);
	}
}
