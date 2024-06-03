<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['products'] = \App\Models\Product::where('active', true)->get();
        $data['title'] = 'All Products';
        return view('products' , $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        if(session()->has('product_'.$id) == false){
            session()->put('product_'.$id, true);
            $product = \App\Models\Product::where('slug', $id)->first();
            $product->views = $product->views + 1;
            $product->save();
        }
      
        $data['product'] = \App\Models\Product::where('slug', $id)->first();
        $data['products'] = \App\Models\Product::where('category_id', $data['product']->category_id)->where('active', true)->limit(4)->get();
        $data['title'] = $data['product']->name;
        return view('product',$data);
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
