<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('project.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function register()
    {
        return view('project.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Formfield = $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'phonenumber' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',

            

        ]);

        // dd($Formfield);
        $Formfield['password'] = bcrypt($Formfield['password']);
        $user = User::create($Formfield);
        auth()->login($user);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
