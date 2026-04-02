<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Rāda visu produktu sarakstu
    public function index()
    {
        $allProducts = Product::all();
        return view('products.index', compact('allProducts'));
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|min:4|max:255']);
        Product::create(['name' => $request->input('name')]);
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate(['name' => 'required|string|min:4|max:255']);
        $product->name = $request->input('name');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}