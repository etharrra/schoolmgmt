<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['date',
							'status',
							'description',
							'student_id'];

	public function student($value='')
	{
		return $this->belongsTo('App\Student');
	}						
}
