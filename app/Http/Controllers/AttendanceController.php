<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Grade;
use App\Room;
use App\Student;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
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
        $grade = Grade::all();
        $attendance = Attendance::all();
        return view('backend.attendance.index',compact('attendance','grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userid = $id = Auth::id();
        // dd($userid);
        $grades = Grade::all();
        $rooms = Room::all();
        $students = Student::all();
        $date = date("Y-m-d");
        // dd($date);
        return view('backend.attendance.create',compact('grades','rooms','students','date'));
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
       /* $request->validate([
            "date" => 'required',
            "status" => 'required',
            "student" => 'required',
            "description" => 'sometimes'
        ]);
        dd($request);*/
        // Store
        $student_list = request('mycart');

        //dd($student_list);
        
        
             //dd(count($student_list));
           foreach ($student_list as $key => $value) {
               // dd($value);
                $date = request('date');
                
                $attendance = new Attendance;
                $attendance->date = $date;
                $description=$value['description'];
                $attendance->description=$description;
                if ($description) {
                    $attendance->status = "absent";
                }else{
                    $attendance->status = "present";
                }
                $attendance->student_id = $value['id'];

              
          $attendance->save();
            
            
        }
        return $attendance;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $attendance = Attendance::find($id);
        return view('backend.attendance.show',compact('attendance'));
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
        $students = Student::all();
        $attendance = Attendance::find($id);
        return view('backend.attendance.edit',compact('attendance','grades','rooms','students'));
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
        $request->validate([
            "date" => 'required',
            "status" => 'required',
            "student" => 'required',
            "description" => 'sometimes'
        ]);

        // dd($request);
        // Store
        $attendance = Attendance::find($id);
        $attendance->date = request('date');
        $attendance->status = request('status');
        $attendance->student_id = request('student');
        $attendance->description = request('description');
        $attendance->save();

        // Redirect
        return redirect()->route('attendance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendance = Attendance::find($id);
        $attendance->delete();

        return redirect()->route('attendance.index');
    }
}
