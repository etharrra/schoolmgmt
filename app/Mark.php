<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable = ['mark',
						   'student_id',
						   'subject_id',
						   'month'
						];

	public function student($value='')
	{
		return $this->belongsTo('App\Student');
	}
	public function subject($value='')
	{
		return $this->belongsTo('App\Subject');
	}					
}
