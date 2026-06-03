<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/inventory', function () {
    return "Halaman Inventory";
})->middleware('inventory');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/insert', [ProductController::class, 'insert']);
Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');

Route::resource('categories', CategoryController::class);