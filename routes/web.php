<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('faq', [FaqController::class, 'index'])->name('faq.index');
Route::resource('products', ProductController::class);
Route::resource('merchandise', MerchandiseController::class);
Route::resource('about', AboutController::class)->except(['update', 'destroy']);
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.send');

Route::get('/storage-config', function () {
    Artisan::call('storage:link');
    return 'ok';
});

// jangan diapus briq
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/seller.php';
