<?php
class Dni extends Eloquent
{
	public function user()
	{
		return $this->belongsTo('User');
	}
}