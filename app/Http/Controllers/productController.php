<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = products::latest()->get();

    //    $allproducts = products::all()->get();

        return view('project.home', [
            'products' => $products,
            // 'allproducts' => $allproducts
        ]
        
    );
    }


      /**
     * Show products.
     */
    public function showproducts()
    {
        $allproducts = products::latest()->paginate(12);
        return view('project.product',[
            'allproducts' => $allproducts
        ]
    
    );
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        
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
    public function show(products $id)
    {

        // dd($id);
        
        return view('project.single-product', [
            'product' => $id

            
        ]);
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
