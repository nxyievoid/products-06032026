<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function get(string $Product): View
    {
        return view('product', [
            'product' => product::get($Product)
        ]);
    }
}
