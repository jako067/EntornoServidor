<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Generator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products= Product::get();
        return view('products.index',compact('products'));
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
        $generatedName= $request->file('img')->store('','public');
        $product =new Product();
        $product->name =$request->input('name');
        $product->brand =$request->input('brand');
        $product->description=$request->input('description');
        $product->price =$request->input('price');
        $product->stock=$request->input('stock');
        $product->available =($request->input('available'))?true:false;
        $product->img =$generatedName;

        $product->save();

        return redirect()->route('product.show',$product);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->name =$request->input('name');
        $product->brand =$request->input('brand');
        $product->description=$request->input('description');
        $product->price =$request->input('price');
        $product->stock=$request->input('stock');
        $product->available =($request->input('available'))?true:false;
        $product->img =$request->input('img');

        $product->save();

        return redirect()->route('product.show',$product);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
