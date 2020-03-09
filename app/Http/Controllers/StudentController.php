<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Room;
use App\User;
use App\Grade;
use App\Guardian;
use App\Attendance;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Admin')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();             
        $students = Student::all();
        
        return view('backend.student.index',compact('students','grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $rooms = Room::all();
        $grades  = Grade::all();
        return view('backend.student.create',compact('rooms','grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        // Validation
        $request->validate([
            "name" => 'required|min:5|max:191',
            "avatar" => 'required|mimes:jpeg,jpg,png',
            "phone" => 'required|min:9|max:191',
            "dob" => 'required',
            "address" => 'required|min:5|max:191',
            "room_id" => 'required',
            "user_id" => 'required'
        ]);
        // dd($request);

        // Uploadfile id exits
        if ($request->hasfile('avatar')) {
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/student/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = '/storage/student/'.$name;
        }

        $student = new Student;
        $student->name = request('name');
        $student->avatar = $path;
        $student->phone = request('phone');
        $student->dob = request('dob');
        $student->address = request('address');
        $student->room_id = request('room_id');
        $student->user_id = request('user_id');
        $student->save();

        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
            if ($fullattendancejune == 0) {
                $persentjune = "NO Attendance";
            }else{
                $persentjune = floor(1 * $presentattendancejune / $fullattendancejune * 100);
            }
            
            
            // dd($persent);           
        /*foreach ($student as $key => $value) {
            echo  $value->attendance->date;
        } */                   
        // dd($grade_subject); 
        // dd($student_mark_june);             

        return view('backend.student.show',compact('student','guardian','room_subject','student_mark_june','student_mark_july','student_mark_august','student_mark_september','student_mark_october','student_mark_november','student_mark_december','student_mark_january','student_mark_february','persentjune'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grades = Grade::all();
        $rooms = Room::all();
        $student = Student::find($id);
        $users = User::all();
        return view('backend.student.edit',compact('student','rooms','users','grades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // Validation
        $request->validate([
            "name" => 'required|min:5|max:191',
            "avatar" => 'sometimes|mimes:jpeg,jpg,png',
            "phone" => 'required|min:9|max:191',
            "dob" => 'required',
            "address" => 'required|min:5|max:191',
            "room_id" => 'required',
            "user_id" => 'required'
        ]);
         // dd($request);

        // Uploadfile id exits
        if ($request->hasfile('avatar')) {
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/student/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = '/storage/student/'.$name;
        }else{
            $path = request('oldavatar');
        }

        $student = Student::find($id);
        $student->name = request('name');
        $student->avatar = $path;
        $student->phone = request('phone');
        $student->dob = request('dob');
        $student->address = request('address');
        $student->room_id = request('room_id');
        $student->user_id = request('user_id');
        $student->save();
        // Redirect
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('student.index');
    }
}
