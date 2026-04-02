<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    // Rāda visu produktu sarakstu
    public function index()
    {
        $allProducts = Product::all();
        return view('products.index', compact('allProducts'));
    }

    // Parāda formu jauna produkta izveidei
    public function create()
    {
        return view('products.create');
    }

    // Saglabā jaunu produktu ar try..catch
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|min:4|max:255'
            ]);

            Product::create(['name' => $request->input('name')]);

            return redirect()->route('products.index')->with('success', 'Product created successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()
                             ->withErrors($e->errors())
                             ->withInput()
                             ->with('error', 'Please correct the form errors!');
        }
    }

    // Parāda rediģēšanas formu
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Atjauno esošu produktu ar try..catch
    public function update(Request $request, Product $product)
    {
        try {
            $request->validate([
                'name' => 'required|string|min:4|max:255'
            ]);

            $product->name = $request->input('name');
            $product->save();

            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()
                             ->withErrors($e->errors())
                             ->withInput()
                             ->with('error', 'Please correct the form errors!');
        }
    }

    // Dzēš produktu
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}