<?php

class General extends Eloquent {
	protected $guarded = array();

	public $errors;

	public $input;

	protected static $messages = array(
			'full_name' 	=> 'Full Name',
			'email'			=> 'Email',
			'phone_no'		=> 'Phone No',
			'website'		=> 'Website',
			'address_line1'	=> 'Address Line 1',
			'address_line2'	=> 'Address Line 2',
			'refs'			=> 'References',
			'job_title'		=> 'Job Title',
			'start_date'	=> 'Start Date',
			'end_date'		=> 'End Date',
			'company'		=> 'Company Name',
			'interests'		=> 'Interests',
			'course_name'	=> 'Course Name',
			'institution'	=> 'Institution',
			'other_info'	=> 'Other Information',
			'info'			=> 'Other Information',
			 );

	public static $rules = array();

	public static function getMessage($attr){

		return static::$messages[$attr];

	}

	public static function getLi($key, $attr){

		if($attr){
			return '<li>'.self::getMessage($key).' '.$attr.'</li>';
		}
	}

	public static function getStringForMany($attrs){
		if($attrs == null)

			return null;

		$string ='<ul>';

		foreach($attrs as $attr){
			foreach($attr as $key=>$status){

		 	$string	.= self::getLi($key,$status);

		 	}
		 }
		 $string .= '</ul>';

		 return $string;
	}

	public static function getStringForOne($attrs){
		if($attrs == null)

			return null;

		$string ='<ul>';

		foreach($attrs as $key=>$attr ){

		 	$string	.= self::getLi($key,$attr);

		 }

		 $string .= '</ul>';

		 return $string;
	}
	public function checkError($attr){


	}

}
