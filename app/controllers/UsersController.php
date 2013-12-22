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
		$user = User::currentLoggedIn();
		$infoData = $user->info;
		$workData = $user->work;
		$eduData = $user->edu;
		$interestData = $user->interest;
		$refData = $user->ref;
		$otherData = $user->other;

		$data = array(
			'info'		=> $infoData,
			'work'		=> $workData,
			'edu'		=> $eduData,
			'interest'	=> $interestData,
			'ref'		=> $refData,
			'other'		=> $otherData);
        return View::make('users.edit')->with($data);;
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $user
	 * @return Response
	 */
	public function postUpdate()
	{
		$user = User::currentLoggedIn();

		$input = Input::all();

		Info::updateInfo($input['info'], $user->info, $user->info());

		Interest::updateInterest($input['interests'], $user->interest, $user->interest());

		Ref::updateRef($input['refs'], $user->ref, $user->ref());

		Work::updateWork($input['work'], $user);

		Edu::updateEdu($input['edu'], $user);

		Other::updateOther($input['other'], $user);
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
