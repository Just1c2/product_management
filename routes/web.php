<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Redirects to the Products Resource Controller

Route::get('/', function () {
    return redirect('/products');
});

Route::resource('products', ProductController::class);
