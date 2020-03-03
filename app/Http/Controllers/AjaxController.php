<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Room;
use App\Student;
use App\User;
use App\Subject;
use Illuminate\Support\Facades\DB;



class AjaxController extends Controller
{
    public function getroom(Request $request)
    {
    	$id =request('id');
    	$room = Room::where('grade_id',$id)->get();
    	
    	return $room;
    }
    public function getstudent(Request $request)
    {
    	$id =request('id');
    	$student = Student::where('room_id',$id)->get();
    	
    	return $student;
    }

    public function getguardian(Request $request)
    {
        $email =request('email');
        // dd($email);
        $user = User::where('email',$email)->get();
        // dd($user);
        return $user;
    }

    public function getsubject(Request $request)
    {
        $id =request('id');
         // dd($id);
        $subject = DB::table('grade_subject')
                        ->join('subjects','grade_subject.subject_id','=','subjects.id')
                        ->where('grade_subject.grade_id','=',$id)
                        ->select('grade_subject.*','subjects.name as subname')
                        ->get();
         //dd($subject);
        return $subject;                
      
    }
}
