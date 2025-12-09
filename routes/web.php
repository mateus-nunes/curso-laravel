<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
})->name("index");
Route::get('/teste', function () {
    echo "Hello World";
});

Route::resource("/products", ProductController::class);
