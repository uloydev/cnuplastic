<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerchandiseController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('faq', [FaqController::class, 'index'])->name('faq.index');
Route::prefix('products')->name('products.')->group(function (){
    Route::resource('/', ProductController::class);
});
Route::resource('merchandise', MerchandiseController::class);
Route::resource('about', AboutController::class)->except(['update', 'destroy']);

// jangan diapus briq
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/seller.php';
