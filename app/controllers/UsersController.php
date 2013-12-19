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
	public function postUpdate($user)
	{
		//
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
