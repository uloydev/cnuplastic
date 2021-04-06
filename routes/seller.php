<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Seller\SellerController;


    Route::prefix('seller')->middleware('CheckRole:seller')->name('seller.')->group(function () {
        Route::redirect('/', 'seller/dashboard');
        Route::get('dashboard' , [SellerController::class, 'dashboard'])->name('dashboard');
        // Route::resource('product', ProductController::class)->only(['index', 'show', 'destroy']);
        // Route::resource('seller', SellerController::class)->only(['index', 'show']);
        // Route::resource('promotion', PromotionController::class)->only(['index', 'show', 'update']);
    });