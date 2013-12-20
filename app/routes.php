<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/logout','IndexController@LogOut');

Route::get('{user}/edit',array(
	'as' => 'userEdit',
	'uses' => 'UsersController@getEdit'));

Route::post('{user}/update',array(
	'as' => 'userUpdate',
	'uses' => 'UsersController@postUpdate'));

Route::get('/','IndexController@showIndex');

Route::controller('','LogController');

