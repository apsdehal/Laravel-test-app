<?php

class Ref extends Eloquent {
	protected $guarded = array();

	public static $rules = array();

	public static function showRef($user){

		$refs = $user->getRef();

		return General::getStringForOne($refs);

	}
}
