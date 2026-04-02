<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1> About this page </h1>';
});

Route::get('/info', function () {
    return view('info');
});

// Produkta CRUD maršruti
Route::get('/form', function () {
    return view('products.create');
})->name('products.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');