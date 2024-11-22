<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('product.create');
});

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
