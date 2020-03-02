<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name',
    					   'avator',
						   'phone',
						   'dob',
						   'address',
						   'user_id',
						   'room_id'];

	public function room($value='')
	{
		return $this->belongsTo('App\Room');
	}
	public function user($value='')
	{
		return $this->belongsTo('App\User');
	}					   
}
