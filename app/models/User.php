<?php
class User extends Eloquent
{
  public function setPassword($string) 
  {
  	$this->setAttribute('password', Hash::make($string));
  }
  public function dni()
  {
  	return $this->hasOne('Dni', 'user_id');
  }
}
