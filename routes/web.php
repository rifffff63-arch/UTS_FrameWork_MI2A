<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');
Route::get('/create', [ProductController::class, 'create'])
    ->name('products.create');
Route::post('/store', [ProductController::class, 'store'])
    ->name('products.store');
Route::get('/insert', [ProductController::class, 'insert']);



Route::get('/edit/{id}', [ProductController::class, 'edit']);
Route::post('/update/{id}', [ProductController::class, 'update']);
Route::get('/delete/{id}', [ProductController::class, 'delete']);