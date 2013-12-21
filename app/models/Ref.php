<?php

class Ref extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','ref_id');

	public static $rules = array();

	public static function showRef($user){

		$refs = $user->getRef();

		return General::getStringForOne($refs);

	}
}
