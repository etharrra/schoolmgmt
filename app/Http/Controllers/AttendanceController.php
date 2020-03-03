<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attendance;
use App\Grade;
use App\Room;
use App\Student;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $attendance = Attendance::all();
        return view('backend.attendance.index',compact('attendance'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        $rooms = Room::all();
        $students = Student::all();
        return view('backend.attendance.create',compact('grades','rooms','students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            "date" => 'required',
            "status" => 'required',
            "student" => 'required',
            "description" => 'sometimes'
        ]);
        //dd($request);
        // Store
        $attendance = new Attendance;
        $attendance->date = request('date');
        $attendance->status = request('status');
        $attendance->student_id = request('student');
        $attendance->description = request('description');
        $attendance->save();

        return redirect()->route('attendance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        dd($request);
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
