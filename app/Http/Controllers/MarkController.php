<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mark;
use App\Student;
use App\Subject;
use App\Grade;
use App\Teacher;
use App\Room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\RoomResource;

class MarkController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Admin')->except('index','create','store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mark = Mark::all();
        return view('backend.mark.index',compact('mark'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = Auth::id();
        $teacherfind =Teacher::where('user_id',$userid)->value('id');
        //dd($teacherfind);
        //$id=$teacherfind->id;
        //dd($id);
        $teacher = Teacher::find($teacherfind);
        //dd($teacher);
        $room=$teacher->rooms()->get();
        // dd($room);
        $rooms = RoomResource::collection($room);
        // dd($rooms);  
        // $grades = Grade::all();
        $students = Student::all();

        $subjectid = Teacher::where('user_id',$userid)->value('subject_id');
        // dd($subjectid);
        $subjects = Subject::where('id',$subjectid)->value('name');
       // dd($subjects);
        return view('backend.mark.create',compact('students','subjects','rooms','subjectid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /*$request->validate([
            "mark" => 'required|min:1|max:191',
            "student_id" => 'required',
            "subject_id" => 'required',
            "month" => 'required'
        ]);*/
        $student_mark = request('mymark');
        // dd($student_mark);
        foreach ($student_mark as $key => $value) {
               // dd($value);
                $month = request('month');
                $subject = request('subject');
                // dd($subject);
                $mark = new Mark;
                $mark->month = $month;
                $mark->subject_id = $subject;
                $studentmark=$value['mark'];
                $mark->student_id = $value['id'];
                $mark->mark = $studentmark;

              
          $mark->save();
            
            
        }

        return redirect()->route('mark.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mark = Mark::find($id);
        return view('backend.mark.show',compact('mark'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::all();
        $subjects = Subject::all();
        $mark = Mark::find($id);
        return view('backend.mark.edit',compact('students','subjects','mark'));
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
        //dd($request);
        // Validation
        $request->validate([
            "mark" => 'required|min:1|max:191',
            "student_id" => 'required',
            "subject_id" => 'required',
            "month" => 'required'
        ]);

        $mark = Mark::find($id);
        $mark->mark = request('mark');
        $mark->student_id = request('student_id');
        $mark->subject_id = request('subject_id');
        $mark->month = request('month');
        $mark->save();
         // Redirect
        return redirect()->route('mark.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mark = Mark::find($id);
        $mark->delete();

        return redirect()->route('mark.index');
    }
}
