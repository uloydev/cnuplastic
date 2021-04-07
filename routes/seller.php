<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Seller\SellerController;
    use App\Http\Controllers\Seller\ProductController;
    use App\Http\Controllers\Seller\PromotionController;


    Route::prefix('seller')->middleware('CheckRole:seller')->name('seller.')->group(function () {
        Route::redirect('/', 'seller/dashboard');
        Route::get('dashboard' , [SellerController::class, 'dashboard'])->name('dashboard');
        Route::get('account-setting', function () {
            return 'ok';
        })->name('account-setting');
        Route::get('account-verification', function () {
            return 'ok';
        })->name('account-verification');
        Route::resource('product', ProductController::class);
        Route::resource('promotion', PromotionController::class);
    });