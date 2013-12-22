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

	public static function updateWork($work, $user){
		if(!empty($work[0]['job_title'])){
			foreach($work as $w){
				if($w['work_id']) {
					$orgWork = $user->work()->where('work_id','=',$w['work_id']);
					$orgWork->update($w);
				} else {
					$newWorkRow = new Work($work);
					$user->work()->save($newWorkRow);
				}
			}
		}
	}
}
