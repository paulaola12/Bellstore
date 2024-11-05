<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\carts;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('project.cart');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        // dd($request->all());

        if(Auth::id()){
            $product = products::find($id);

            $cart = new carts;

            $cart->name = auth()->user()->name;
            $cart->email = auth()->user()->email;
            $cart->phone = auth()->user()->phonenumber;
            $cart->product_name = $product->product_name;
            $cart->quantity = $request->quantity;
            $cart->price = $product->price;
            $cart->picture = $product->picture;
            $cart->save();

            return redirect('/products');
        }
        
        else
        {
            return redirect('/login');
        }
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
