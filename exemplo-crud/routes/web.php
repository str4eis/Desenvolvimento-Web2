<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::resource('products', ProductController::class);

