<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
   protected $fillable = ['name',
						  'grade_id'];

   public function grade($value='')
	{
		return $this->belongsTo('App\Grade');
	}

	public function teachers($value='')
	{
		return $this->belongsToMany('App\Teacher')
    				->withTimestamps();
	}						  
}
