<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name',
						   'phone',
						   'dob',
						   'address',
						   'guardian_id',
						   'class_id'];
}
