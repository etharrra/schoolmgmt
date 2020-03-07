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
    	// dd($student);
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
                      
         // dd($subject);
        return $subject;                
      
    }

    public function gradestudent(Request $request)
    {
        $id =request('id');
        // dd($id);
        $gradestudent = DB::table('grades')
                        ->join('rooms','grades.id','=','rooms.grade_id')
                        ->join('students','students.room_id','=','rooms.id')
                        ->join('users','users.id','=','students.user_id')
                        ->where('rooms.grade_id','=',$id)
                        ->select('students.*','students.name as sname','rooms.name as rname','users.name as uname')
                        ->get();
         //dd($gradestudent);
        return $gradestudent;
    }

    public function roomdetail(Request $request)
    {
        $id = request('id');
        // dd($id);
        $grade = DB::table('grades')
                ->join('rooms','rooms.grade_id','=','grades.id')
                ->where('rooms.id','=',$id)
                ->select('grades.name as gradename')
                ->get();

        $room = Room::find($id);

        $roomteacher = DB::table('rooms')
                        ->join('room_teacher','rooms.id','=','room_teacher.room_id')
                        ->join('teachers','teachers.id','=','room_teacher.teacher_id')
                        ->join('users','users.id','=','teachers.user_id')
                        ->where('rooms.id','=',$id)
                        ->select('users.name as uname','users.email as uemail','teachers.avatar as tavatar','rooms.name as rname')
                        ->get();

        $roomstudent = DB::table('rooms')
                        ->join('grades','rooms.grade_id','=','grades.id')
                        ->join('students','rooms.id','=','students.room_id')
                        ->join('users','students.user_id','=','users.id')
                        ->where('rooms.id','=',$id)
                        ->select('students.*','students.name as sname','students.avatar as savatar','users.name as gname')
                        ->get();                
        // dd($roomteacher);
        /*return response()->json([
            'roomteacher' => $roomteacher,
            'roomstudent' => $roomstudent
        ]);*/
        return view('backend.room.detail',compact('roomteacher','roomstudent','room','grade'));
                        
    }
}
