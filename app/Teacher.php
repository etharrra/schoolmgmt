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
}
