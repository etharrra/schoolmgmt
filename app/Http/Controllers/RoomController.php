<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Room;

use App\Grade;

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
