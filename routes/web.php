<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/merchandise', [HomeController::class, 'merchandise'])->name('merchandise');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// jangan diapus briq
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
