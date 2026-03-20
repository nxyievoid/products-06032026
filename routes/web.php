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
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}/delete', [ProductController::class, 'destroy']);