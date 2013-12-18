<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public static function LogOut(){
		Auth::logout();
	}

	public static function currentLoggedIn(){

		$user = Auth::getUser();

		$user->password = null;

		return $user;
	}

	public function info(){

		return $this->hasOne('Info');
	}

	public function edu(){

		return $this->hasMany('Edu');
	}

	public function work(){

		return $this->hasMany('Work');
	}

	public function interest(){

		return $this->hasOne('Interest');
	}

	public function ref(){

		return $this->hasOne('Ref');
	}

	public function other(){

		return $this->hasMany('Other');
	}

	public function getInfo(){

		$attr = array('full_name','email','phone_no','address_line1','address_line2','website');

		$info = $this->info()->get($attr);

		return json_decode($info[0]);
	}

	public function getRef(){

		$attr = array('refs');

		$refs = $this->ref()->get($attr);

		return json_decode($refs[0]);
	}
	
	public function getWork(){

		$attr = array('job_title','company','start_date','end_date','other_info');

		$work = $this->work()->get($attr);

		return json_decode($work);
	}

	public function getEdu(){

		$attr = array('course_name','institution','start_date','end_date');

		$edu = $this->edu()->get($attr);

		return json_decode($edu);
	}

	public function getInterest(){

		$attr = array('interests');

		$interests = $this->interest()->get($attr);

		return json_decode($interests[0]);
	}

	public function getOther(){

		$attr = array('info');

		$others = $this->other()->get($attr);

		return json_decode($others);
	}

}