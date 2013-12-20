<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	protected $restful = true;
	public function get($user)
	{
        return View::make('users.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $user
	 * @return Response
	 */
	public function getEdit($user)
	{
        return View::make('users.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $user
	 * @return Response
	 */
	public function postUpdate()
	{
		$input = Input::all();
		$info = $input['info'];
		$work = $input['work'];
		$edu  = $input['edu'];
		$interest = $input['interests'];
		$ref = $input['refs'];
		$other = $input['other'];
		$user = User::currentLoggedIn();

		$infoData = $user->info;
		$workData = $user->work;
		$eduData = $user->edu;
		$interestData = $user->interest;
		$refData = $user->ref;
		$otherData = $user->other;

		$infoObject = $user->info();
		$workObject = $user->work();
		$eduObject = $user->edu();
		$interestObject = $user->interest();
		$refObject = $user->ref();
		$otherObject = $user->other();


		if(count($infoData)){
			$infoObject->update($info);
		} else {
			$newInfoRow = new Info($info);
			$infoObject->save($newInfoRow);
		}

		if(count($interestData)){
			$interestObject->update($interest);
		} else {
			$newInterestRow = new Interest($interest);
			$interestObject->save($newInterestRow);
		}

		if(count($refData)){
			$refObject->update($ref);
		} else {
			$newRefRow = new Ref($ref);
			$refObject->save($newRefRow);
		}

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $user
	 * @return Response
	 */
	public function getDestroy($user)
	{
		//
	}

	public function postDestroyconfirm($user)
	{
		//
	}

}
