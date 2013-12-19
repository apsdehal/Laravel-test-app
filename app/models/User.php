<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {


	protected $guarded = array('user_id');

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

		//$user->password = null;

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


		$infoObject = $this->info();

		return self::getRelData($infoObject,$attr,0);

		}

	public function getRef(){

		$attr = array('refs');

		$refObject = $this->ref();

		return self::getRelData($refObject,$attr, 0);

		}

	public function getWork(){

		$attr = array('job_title','company','start_date','end_date','other_info');

		$workObject = $this->work();

		return self::getRelData($workObject,$attr,1);

		}

	public function getEdu(){

		$attr = array('course_name','institution','start_date','end_date');

		$eduObject = $this->edu();

		return self::getRelData($eduObject,$attr, 1);
		}

	public function getInterest(){

		$attr = array('interests');

		$interestObject = $this->interest();

		return self::getRelData($interestObject,$attr, 0);

		}

	public function getOther(){

		$attr = array('info');

		$otherObject = $this->other();

		return self::getRelData($otherObject,$attr,1);

		}

	public static function getRelData($object, $attr, $par){
		$count = $object->count();

		if($count){

			$data = $object->get($attr);

			return ($par==0)?json_decode($data[0]):json_decode($data);

		} else

			return null;
	}

	public static function createUser($info){
		$info['password'] = Hash::make($info['password']);
		$user = new self($info);
		$user->save();
		return $user;
	}

}