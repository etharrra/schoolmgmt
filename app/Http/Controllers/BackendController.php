<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Teacher;
use App\Student;
use App\Grade;
use App\Room;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function dashboard()
    {
    	$totalteahcer = Teacher::all();
    	$totalteahcer = count($totalteahcer);

    	$totalstudent = Student::all();
    	$totalstudent = count($totalstudent);

    	$date = date('2020-06-01');
    	// $attendance = date("Y/m/d");
    	$attendance = Attendance::where('date','=',$date)->get();
    	$attendance = count($attendance);
    	$present = Attendance::where('date','=',$date)
    				->where(function ($query) {
                           $query->where('status','=','present');
                        })
    				->get();
    	$present = count($present);
    	$absent = Attendance::where('date','=',$date)
    				->where(function ($query) {
                           $query->where('status','=','absent');
                        })
    				->get();
    	$absent = count($absent);
    	$persentjune = floor(1 * $present / $attendance * 100);						
    	// dd($totalstudent);
    	return view('backend.dashboard',compact('present','absent','persentjune','totalstudent','totalteahcer'));
    }

    public function studentbygrade()
    {
    	$graden = 6;
    	$gradet = 7;
    	$gradee = 8;

    	$gradenstu = DB::table('rooms')
    				->join('grades','rooms.grade_id','=','grades.id')
    				->join('students','rooms.id','=','students.room_id')
    				->where('grades.id','=',$graden)
    				->select('students.*')
    				->get();
    	$gradenstu = count($gradenstu);

    	$gradetstu = DB::table('rooms')
    				->join('grades','rooms.grade_id','=','grades.id')
    				->join('students','rooms.id','=','students.room_id')
    				->where('grades.id','=',$gradet)
    				->select('students.*')
    				->get();
    	$gradetstu = count($gradetstu);

    	$gradeestu = DB::table('rooms')
    				->join('grades','rooms.grade_id','=','grades.id')
    				->join('students','rooms.id','=','students.room_id')
    				->where('grades.id','=',$gradee)
    				->select('students.*')
    				->get();
    	$gradeestu = count($gradeestu);
    	// dd($gradenstu);
    	return response()->json([
            'gradenstu' => $gradenstu,
            'gradetstu' => $gradetstu,
            'gradeestu' => $gradeestu,
        ]);
    }
}
