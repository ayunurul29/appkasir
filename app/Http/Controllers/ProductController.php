<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('products.index', [
            'products' => Product::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'nama_product' => 'required',
            'harga' => 'required',
            'stok' => 'required',
                ]);

           Product::create([
             'product_id' => $request->product_id,
             'nama_product' => $request->nama_product,
             'harga' => $request->harga,
             'stok' => $request->stok,

              ]);
          
        return redirect()->route('products.index')
                ->withSuccess('New Product is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', [
           'product' => $product
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_id' => 'required',
            'nama_product' => 'required',
            'harga' => 'required',
            'stok' => 'required',
         
                ]);

            $product->update([
                'product_id' => $request->product_id,
                'nama_product' => $request->nama_product,
                'harga' => $request->harga,
                'stok' => $request->stok,
   
              ]);
           
        return redirect()->route('products.index')
                ->withSuccess('New product is added successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                ->withSuccess('product is deleted successfully.');
    }
}
