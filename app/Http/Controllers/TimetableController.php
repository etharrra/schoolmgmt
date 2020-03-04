<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timetable;
use App\Room;
use App\Subject;
use App\Grade;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables = Timetable::all();
        return view('backend.timetable.index',compact('timetables'));
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
        $subjects = Subject::all();
        return view('backend.timetable.create',compact('rooms','subjects','grades'));
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
        //validation

        $request->validate([
            "time_start" => 'required',
            "time_finish" => 'required',
            "day" => 'required',
            "room_id" => 'required',
            "subject_id" => 'required'
        ]);
        // dd($request);

        //Upload if exist

        //Store Data
        $timetable = new Timetable;
        $timetable->time_start = request('time_start');
        $timetable->time_finish = request('time_finish');
        $timetable->day = request('day');
        $timetable->room_id = request('room_id');
        $timetable->subject_id = request('subject_id');
        $timetable->save();

        return redirect()->route('timetable.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $timetable = Timetable::find($id);
        return view('backend.timetable.show',compact('timetable'));
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
        $timetable = Timetable::find($id);
        $rooms = Room::all();
        $subjects = Subject::all();
        return view('backend.timetable.edit',compact('timetable','rooms','subjects','grades'));
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
        //validation

        $request->validate([
            "time_start" => 'required',
            "time_finish" => 'required',
            "day" => 'required',
            "room_id" => 'required',
            "subject_id" => 'required'
        ]);
        // dd($request);

        //Upload if exist

        //Store Data
        $timetable = Timetable::find($id);
        $timetable->time_start = request('time_start');
        $timetable->time_finish = request('time_finish');
        $timetable->day = request('day');
        $timetable->room_id = request('room_id');
        $timetable->subject_id = request('subject_id');
        $timetable->save();

        return redirect()->route('timetable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timetable = Timetable::find($id);
        $timetable->delete();

        return redirect()->route('timetable.index');
    }
}
