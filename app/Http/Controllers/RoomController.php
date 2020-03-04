<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;

use App\Grade;

use App\Timetable;

use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('backend.room.index',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grades = Grade::all();
        return view('backend.room.create',compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation

        $request->validate([
            "name" => 'required|min:3|max:191',
            "grade_id" => 'required'
        ]);

        //Upload if exist

        //Store Data
        $room = new Room;
        $room->name = request('name');
        $room->grade_id = request('grade_id');
        $room->save();

        // Redirect
        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tmon = DB::table('timetables')
                        ->join('rooms','timetables.room_id','=','rooms.id')
                        ->join('subjects','timetables.subject_id','=','subjects.id')
                        ->where('rooms.id','=',$id)
                        ->where(function ($query) {
                           $query->where('day', '=', 'monday');
                        })
                        ->select('subjects.*','subjects.name as subname')
                        ->get();
        $ttue = DB::table('timetables')
                        ->join('rooms','timetables.room_id','=','rooms.id')
                        ->join('subjects','timetables.subject_id','=','subjects.id')
                        ->where('rooms.id','=',$id)
                        ->where(function ($query) {
                           $query->where('day', '=', 'tuesday');
                        })
                        ->select('subjects.*','subjects.name as subname')
                        ->get();
        $twed = DB::table('timetables')
                        ->join('rooms','timetables.room_id','=','rooms.id')
                        ->join('subjects','timetables.subject_id','=','subjects.id')
                        ->where('rooms.id','=',$id)
                        ->where(function ($query) {
                           $query->where('day', '=', 'wednesday');
                        })
                        ->select('subjects.*','subjects.name as subname')
                        ->get();
        $tthurs = DB::table('timetables')
                        ->join('rooms','timetables.room_id','=','rooms.id')
                        ->join('subjects','timetables.subject_id','=','subjects.id')
                        ->where('rooms.id','=',$id)
                        ->where(function ($query) {
                           $query->where('day', '=', 'thursday');
                        })
                        ->select('subjects.*','subjects.name as subname')
                        ->get();
        $tfri = DB::table('timetables')
                        ->join('rooms','timetables.room_id','=','rooms.id')
                        ->join('subjects','timetables.subject_id','=','subjects.id')
                        ->where('rooms.id','=',$id)
                        ->where(function ($query) {
                           $query->where('day', '=', 'friday');
                        })
                        ->select('subjects.*','subjects.name as subname')
                        ->get();
                                                                                        
        // dd($tmon);                
       /* foreach ($timetable as $row) {
            $sid = $row->subject_id;
            $sname = DB::table('subjects')
                        ->where('subjects.id','=',$sid)
                        ->select('subjects.*','subjects.name as subname')
                        ->get();
                       
        }*/
        // dd($timetable);
        return view('backend.room.show',compact('tmon','ttue','twed','tthurs','tfri'));
        
        
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
        $room = Room::find($id);
        return view('backend.room.edit',compact('room','grades'));
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
        $request->validate([
            "name" => 'required|min:3|max:191',
            "grade_id" => 'required'
        ]);

        //Upload if exist

        //Store Data
        $room = Room::find($id);
        $room->name = request('name');
        $room->grade_id = request('grade_id');
        $room->save();

        // Redirect
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();

        return redirect()->route('room.index');
    }
}
