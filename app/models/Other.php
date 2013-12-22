<?php

class Other extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','other_id');

	public static $rules = array();

	public static function showOther($user){

		$others = $user->getOther();

		return General::getStringForMany($others);
	}

	public static function updateOther($other, $user){
		if(!empty($other[0]['info'])){
			foreach($other as $w){
				if($w['other_id']) {
					$orgOther = $user->other()->where('other_id','=',$w['other_id']);
					$orgOther->update($w);
				} else {
					$newOtherRow = new Other($other);
					$user->other()->save($newOtherRow);
				}
			}
		}

	}
}
