<?php

class Interest extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','work_id');

	public static $rules = array();

	public static function showInterest($user){

		$interests = $user->getInterest();

		return General::getStringForOne($interests);

	}

	public static function updateInterest($interest, $interestData, $interestObject){
		if(!empty($interest['interests'])){
			if(count($interestData)){
				$interestObject->update($interest);
			} else {
				$newInterestRow = new Interest($interest);
				$interestObject->save($newInterestRow);
			}
		}
	}
}
