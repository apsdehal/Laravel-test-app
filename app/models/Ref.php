<?php

class Ref extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','ref_id');

	public static $rules = array();

	public static function showRef($user){

		$refs = $user->getRef();

		return General::getStringForOne($refs);

	}

	public static function updateRef( $ref, $refData, $refObject ){
		if(!empty($ref['refs'])){
			if(count($refData)){
				$refObject->update($ref);
			} else {
				$newRefRow = new Ref($ref);
				$refObject->save($newRefRow);
			}
		}
	}
}
