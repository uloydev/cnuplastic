<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerchandiseController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::prefix('faq')->name('faq.')->group(function (){
    Route::get('general', [FaqController::class, 'index'])->name('general');
    Route::get('seller', [FaqController::class, 'seller'])->name('seller');
    Route::get('buyer', [FaqController::class, 'buyer'])->name('buyer');
});
Route::prefix('products')->name('products.')->group(function (){
    Route::get('buy', [ProductController::class, 'buy'])->name('buy');
    Route::resource('/', ProductController::class);
});
Route::resource('merchandise', MerchandiseController::class);
Route::resource('about', AboutController::class)->except(['update', 'destroy']);

// jangan diapus briq
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/seller.php';
