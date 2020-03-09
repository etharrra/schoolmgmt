<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{

	 
    public function index()
    {
    	$student = Student::all();
    	$student = count($student);
    	$teacher = Teacher::all();
    	$teacher = count($teacher);
    	$teacherd = Teacher::paginate(6);
    	return view('frontendtemplate',compact('student','teacher','teacherd'));
    }
}
