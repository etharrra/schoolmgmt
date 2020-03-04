<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Subject;
use App\User;
use App\Room;
use App\Grade;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::all();
        return view('backend.teacher.index',compact('teacher'));
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
        return view('backend.teacher.create',compact('subjects','rooms','grades'));
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
            "avatar" => 'required|mimes:jpeg,jpg,png',
            "email" => 'required',
            "phone" => 'required|min:9|max:191',
            "education" => 'required|min:3|max:191',
            "address" => 'required|min:5|max:191',
            "subject_id" => 'required',
            "rooms" => 'required'
        ]);
        //dd($request);

        // Uploadfile id exits
        if ($request->hasfile('avatar')) {
            $avatar = $request->file('avatar');
            $upload_dir = public_path().'/storage/teacher/';
            $name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move($upload_dir,$name);
            $path = '/storage/teacher/'.$name;
        }

         //Store Data
        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make('12345678');
        $user->save();

        $user->assignRole('Teacher');

        $teacher = new Teacher;

        $teacher->user_id = $user->id;
        $teacher->avatar = $path;
        $teacher->phone = request('phone');
        $teacher->education = request('education');
        $teacher->address = request('address');
        $teacher->subject_id = request('subject_id');
        $teacher->save();

        $teacher->rooms()->attach(request('rooms'));

        // Redirect
        
        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return response()->json($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $subjects = Subject::all();
        $rooms = Room::all();
        return view('backend.teacher.edit',compact('teacher','subjects','rooms'));
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
        // Redirect
        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('teacher.index');
    }
}
