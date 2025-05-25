<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// CRUD Routes untuk Produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');       // Menampilkan semua produk
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Form tambah produk
Route::post('/products', [ProductController::class, 'store'])->name('products.store');        // Proses simpan produk

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Form edit produk
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');  // Proses update

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy'); // Hapus produk
