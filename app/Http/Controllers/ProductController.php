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

    // Parāda formu rediģēšanai
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    // Saglabā jaunu produktu
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);
        Product::create(['name' => $request->input('name')]);
        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

    // Atjauno esošu produktu
    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->save();
        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Dzēš produktu
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
        }

        return redirect()->route('products.index');
    }
}