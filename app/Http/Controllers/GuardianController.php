<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guardian;
use App\User;
use Illuminate\Support\Facades\Hash;

class GuardianController extends Controller
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
        $guardian = Guardian::all();
        return view('backend.guardian.index',compact('guardian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.guardian.create');
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

        // Validation
        $request->validate([
            "name" => 'required|min:3|max:191',
            "email" => 'required',
            "phone" => 'required|min:9|max:191',
            "address" => 'required|min:5|max:191'
        ]);

        //dd($request);

        $user = new User;
        $user->name = request('name');
        $user->email = request('email');
        $user->password = Hash::make('12345678');
        $user->save();

        $user->assignRole('Guardian');

        $guardian = new Guardian;

        $guardian->user_id = $user->id;
        $guardian->phone = request('phone');
        $guardian->address = request('address');
        $guardian->save();
        // redirect
        return redirect()->route('guardian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guardian = Guardian::find($id);
        return view('backend.guardian.show',compact('guardian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guardian = Guardian::find($id);
        return view('backend.guardian.edit',compact('guardian'));
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
            "name" => 'required|min:3|max:191',
            "email" => 'required',
            "phone" => 'required|min:9|max:191',
            "address" => 'required|min:5|max:191'
        ]);

        //dd($request);


        

        $guardian = Guardian::find($id);
        $guardian->phone = request('phone');
        $guardian->address = request('address');
        $guardian->save();


        $user = User::find($guardian->user_id);
        $user->name = request('name');
        $user->email = request('email');
        $user->save();

        // Redirect
        return redirect()->route('guardian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guardian = Guardian::find($id);
        $guardian->delete();

        $user = User::find($guardian->user_id);
        $user->delete();

        return redirect()->route('guardian.index');
    }
}
