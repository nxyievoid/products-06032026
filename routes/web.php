<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return ('<h1> About this page </h1>');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/form', function () {
    return view('products.create');
})->name('products.create');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.delete');
Route::delete('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');