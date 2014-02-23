<?php

class UserController extends BaseController
{

	public function getIndex()
	{
		$users = User::has('Dni')->with('dni')->get();
		return View::make('users.index') -> with('users', $users);
	}
    public function getCreate()
    {
    	return View::make('users.create');
    }
    public function postCreate()
    {
      $user = new User;
      $dni = new Dni;
        $user->real_name = Input::get('real_name');
        $user->email = Input::get('email');
        $user->password = Input::get('password');
        $user->save();

        $dni->numero = Input::get('dni');
        $dni->user_id = $user->id; 
        $dni->save();

        return Redirect::to ('UserController');
    }
    public function getDelete($user_id) 
    {
    	$user = User::find($user_id);

    	if(is_null($user))
        {
        	return Redirect::to('UserControlles');
        }

        $user->delete();

        return Redirect::to('UserController');

    }

    public function getUpdate($user_id)
    {
    	$user = User::find($user_id);

    	if(is_null($user))
    	{
    		return Redirect::to('UserController');
    	}
    	return View::make('users.update')->with('user',$user);
    }

    public function postUpdate($user_id)
    {
    	$user = User::find($user_id);
    	if(is_null($user))
    	{
    		return Redirect::to('UserController');
    	}

    	$user->real_name = Input::get('real_name');
    	$user->email = Input::get('email');

    	if (Input::has('password'))
    	{
    		$user->password = Input::get('password');
    	}
        if (Input::has('dni'))
        {
            $user->dni->number = Input::get('dni');
        }

    	$user->save();

    	return Redirect::to('UserController');
    }




}

