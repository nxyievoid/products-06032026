<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index', ['allProducts' => Product::all()]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/products');
    }
    
    public function store(Request $request)
    {
        // return $request;
        $name = $request->input('name');
        // $input = Product::all();
        $name = Product::create(['name' => $name]);
        return redirect('/products');
    }

        public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }
    
        public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->save();
        return redirect('/products');
    }
}
