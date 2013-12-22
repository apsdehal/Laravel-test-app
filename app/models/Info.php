<?php

class Info extends Eloquent {
	protected $hidden = array('user_id');

	protected $guarded = array('user_id','info_id');

	protected $table = 'infos';

	public static $rules = array();

	public static function showInfo($user){

		$infos = $user->getInfo();

		return General::getStringForOne($infos);

	}

	public static function updateInfo($info, $infoData, $infoObject){
		if(!empty($info['username'])){
				if(count($infoData)){
				$infoObject->update($info);
			} else {
				$newInfoRow = new Info($info);
				$infoObject->save($newInfoRow);
			}
		}
	}


}
