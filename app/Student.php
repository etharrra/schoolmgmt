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
						   'guardian_id',
						   'room_id'];
}
