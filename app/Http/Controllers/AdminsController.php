<?php

namespace App\Http\Controllers;

use App\Models\admins;
use App\Models\products;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admins.create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
          //
          $formField = $request -> validate([
            'product_name' => 'required',
            'categorys_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'picture' => 'required',
            ]);
    
            if($request->hasFile('picture')){
                $formField['picture'] = $request -> file('picture')->store('image', 'public');
            }
            
            // dd($formField);
           
            products::create($formField);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admins $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admins $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admins $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admins $admins)
    {
        //
    }
}
