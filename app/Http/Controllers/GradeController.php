<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Academicyear;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grades = Grade::all();
        return view('backend.grade.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academicyear = Academicyear::all();
        return view('backend.grade.create',compact('academicyear'));
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
            "name" => 'required|min:3|max:191',
            "academicyear_id" => 'required'
        ]);

        //Upload if exist

        //Store Data
        $grade = new Grade;
        $grade->name = request('name');
        $grade->academicyear_id = request('academicyear_id');
        $grade->save();

        // Redirect
        return redirect()->route('grade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grade = Grade::find($id);
        return view('backend.grade.show',compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academicyear = Academicyear::all();
        $grade = Grade::find($id);
        return view('backend.grade.edit',compact('grade','academicyear'));
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
            "name" => 'required|min:3|max:191',
            "academicyear_id" => 'required'
        ]);

        //Upload if exist

        //Store Data
        $grade = Grade::find($id);
        $grade->name = request('name');
        $grade->academicyear_id = request('academicyear_id');
        $grade->save();

        // Redirect
        return redirect()->route('grade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grade = Grade::find($id);
        $grade->delete();

        return redirect()->route('grade.index');
    }
}
