<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Redirects to the Products Resource Controller

//Route::get('/', function () {
  //  return redirect('/products');
//});

//Route::resource('products', ProductController::class);

//Route::get('/', function () {
 //   return redirect('/employees');
//});

//Route::resource('employees', EmployeeController::class);

Route::get('/', function () {
    return redirect('/books');
});

Route::resource('books',BookController::class);
Route::get('/search', 'BookController@search');
