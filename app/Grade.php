<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['name',
							'academicyear_id'];

	public function academicyear($value='')
		{
			return $this->belongsTo('App\Academicyear');
		}						
}
