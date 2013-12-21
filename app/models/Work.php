<?php

class Work extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','work_id');

	protected $table = 'works';

	public static $rules = array();

	public static function showWork($user){

		$works = $user->getWork();

		return General::getStringForMany($works);
	}
}
