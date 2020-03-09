<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academicyear;

class AcademicyearController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Admin')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $academicyears = Academicyear::all();
        return view('backend.academicyear.index',compact('academicyears'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.academicyear.create');
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
            "academicyear" => 'required|min:3|max:191'
        ]);

        //Upload if exist

        //Store Data
        $academicyear = new Academicyear;
        $academicyear->academicyear = request('academicyear');
        $academicyear->save();

        // Redirect
        return redirect()->route('academicyear.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academicyear = Academicyear::find($id);
        return view('backend.academicyear.show',compact('academicyear'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $academicyear = Academicyear::find($id);
        return view('backend.academicyear.edit',compact('academicyear'));
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
            "academicyear" => 'required|min:3|max:191'
        ]);

        //Upload if exist

        //Store Data
        $academicyear = Academicyear::find($id);
        $academicyear->academicyear = request('academicyear');
        $academicyear->save();

        // Redirect
        return redirect()->route('academicyear.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $academicyear = Academicyear::find($id);
        $academicyear->delete();

        return redirect()->route('academicyear.index');
    }
}
