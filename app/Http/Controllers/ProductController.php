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
        $product->delete;
        return redirect('/products');
    }
}
