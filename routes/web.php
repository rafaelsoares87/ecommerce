<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
/* Admin - product */
Route::post('/games/search', [ProductController::class, 'search'])->name('search-product');
Route::get('/dashboard/product', [ProductController::class, 'create'])->name('create-product');
Route::post('/dashboard/product', [ProductController::class, 'store'])->name('product-store');
Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'edit'])->name('product_edit');
Route::patch('/dashboard/product/{id}', [ProductController::class, 'update'])->name('product_update');
Route::get('/games/{id}', [ProductController::class, 'show'])->name('product_show');
Route::delete('/dashboard/product/{id}', [ProductController::class, 'destroy'])->name('product_destroy');





/*Admin category */
Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/categoria', [AdminController::class, 'create'])->name('category_create');
Route::post('/dashboard/categoria', [AdminController::class, 'store'])->name('category-store');
Route::get('/dashboard/categoria/edit/{id}', [AdminController::class, 'edit'])->name('category-edit');
Route::patch('/dashboard/categoria/{id}', [AdminController::class, 'update'])->name('category-update');
Route::get('/categoria/{id}', [AdminController::class, 'show'])->name('dashboard-show');
Route::delete('/dashboard/{id}', [AdminController::class, 'destroy'])->name('dashboard-destroy');










require __DIR__ . '/auth.php';
