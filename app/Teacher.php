<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['user_id',
    						'avator',
							'phone',
							'education',
							'address',
							'subject_id'];

	public function subject($value='')
	{
		return $this->belongsTo('App\Subject');
	}
	public function rooms($value='')
	{
		return $this->belongsToMany('App\Room')
    				->withTimestamps();
	}
	public function user($value='')
	{
		return $this->belongsTo('App\User');
	}						
}
