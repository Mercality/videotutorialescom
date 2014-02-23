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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('prueba', function() {
	$user = new User;

	$user->email = "ramonlv93@gmail.com";
	$user->real_name= "Ramon Ledezma";
	$user->password= "neronado";

	$user->save();

	return "El ususario de prueba ha sido salvado a la base de datos.";
});
Route::controller('UserController', 'UserController');

