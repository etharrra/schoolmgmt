<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Student;
use App\Guardian;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
{
	public function __construct()
	{
		$this->middleware('role:Guardian');
	}

    public function index(Request $request)
    {
    	$id = Auth::id();
    	// dd($id);
    	$students = Student::where('user_id',$id)->get();
    	// dd($students);
    	return view('parents.index',compact('students'));
    }

    public function parentsstudent(Request $request)
    {
    	$id = request('id');
    	// dd($id);
    	$student = Student::find($id);
        $guardian = Guardian::where('user_id','=',$student->user->id)->get();

        $room_subject = DB::table('students')
                        ->join('room_teacher','students.room_id','=','room_teacher.room_id')
                        ->join('teachers','room_teacher.teacher_id','=','teachers.id')
                        ->join('subjects','teachers.subject_id','=','subjects.id')
                        ->where('students.id','=',$id)
                        ->select('subjects.*','subjects.name as subjectname')
                        ->get();
        // dd($room_subject);

        $student_mark_june = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'june');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_july = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'july');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_august = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'august');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_september = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'september');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_october = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'october');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_november = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'november');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_december = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'december');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_january = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'january');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get();

        $student_mark_february = DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->where('month', '=', 'february');
                        })
                        ->select('marks.*','marks.mark as mark','marks.month as month')
                        ->orderBy('marks.subject_id', 'asc')
                        ->get(); 

               
            $fullattendancejune =DB::table('attendances')
                        ->join('students','attendances.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->whereMonth('date','06');
                        })
                        ->get();
            $fullattendancejune = count($fullattendancejune);            

            $presentattendancejune = DB::table('attendances')
                        ->join('students','attendances.student_id','=','students.id')
                        ->where('students.id','=',$id)
                        ->where(function ($query) {
                           $query->whereMonth('date','06')
                                ->where('status', '=', 'present');;
                        })
                        ->get();
            $presentattendancejune = count($presentattendancejune); 
            // dd($attendance);
            // dd($presentattendance,$fullattendance); 
            $persentjune = floor(1 * $presentattendancejune / $fullattendancejune * 100);
            
    	return view('parents.studentdeatil',compact('student','guardian','room_subject','student_mark_june','student_mark_july','student_mark_august','student_mark_september','student_mark_october','student_mark_november','student_mark_december','student_mark_january','student_mark_february','persentjune'));
    }
}
