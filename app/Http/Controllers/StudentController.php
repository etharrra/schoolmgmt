<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Room;
use App\User;
use App\Grade;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('backend.student.index',compact('students'));
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
        return view('backend.student.show',compact('student'));
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
