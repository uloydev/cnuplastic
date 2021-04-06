<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::prefix('faq')->name('faq.')->group(function (){
    Route::get('general', [FaqController::class, 'index'])->name('general');
    Route::get('seller', [FaqController::class, 'seller'])->name('seller');
    Route::get('buyer', [FaqController::class, 'buyer'])->name('buyer');
});
Route::prefix('product')->name('product.')->group(function (){
    Route::get('/', [ProductController::class, 'index'])->name('index');
});
Route::get('/merchandise', [HomeController::class, 'merchandise'])->name('merchandise');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// jangan diapus briq
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/seller.php';
