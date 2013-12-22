<?php

class Edu extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','edu_id');

	public static $rules = array();

	public static function showEdu($user){

		$edus = $user->getEdu();

		return General::getStringForMany($edus);
	}
	public static function updateEdu($edu, $user){
		if(!empty($edu[0]['course_name'])){
			foreach($edu as $w){
				if($w['edu_id']) {
					$orgEdu = $user->edu()->where('edu_id','=',$w['edu_id']);
					$orgEdu->update($w);
				} else {
					$newEduRow = new Edu($edu);
					$user->edu()->save($newEduRow);
				}
			}
		}
	}
}
