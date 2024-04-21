<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        App::setLocale('es');
        $products = Product::all();
        // return view('products/index', ['products' => $products]);
        return view('products/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        App::setLocale('es');
        return view('products/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        App::setLocale('es');
        $request->validate([
          'name' => 'required',
          'price' => ['required', 'numeric'],
        ]);
        $product = new Product($request->all());
        // El uso de $request-all() solo funciona si en el modelo añadimos el atributo "fillable". Si no, debemos añadir campo por campo como en el siguiente comentario:
        // $product->name = $request->name;
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
