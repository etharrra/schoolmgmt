<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = ['time_start',
							'time_finish',
							'class_id',
							'subject_id',
							'day'];
}
