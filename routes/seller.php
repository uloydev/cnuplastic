<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Seller\SellerController;
    use App\Http\Controllers\Seller\ProductController;
    use App\Http\Controllers\Seller\PromotionController;


    Route::prefix('seller')->middleware('CheckRole:seller')->name('seller.')->group(function () {
        Route::redirect('/', 'seller/dashboard');
        Route::get('dashboard' , [SellerController::class, 'dashboard'])->name('dashboard');
        Route::get('account-setting', [SellerController::class, 'accountSetting'])->name('account-setting');
        Route::put('update-account', [SellerController::class, 'update'])->name('update-account');
        Route::get('account-verification', [SellerController::class, 'statusVerification'])->name('account-verification');
        Route::post('account-verification', [SellerController::class, 'storeVerification']);
        Route::resource('product', ProductController::class)->except(['edit'])->middleware('VerifiedSeller');
        Route::resource('promotion', PromotionController::class)->except(['edit, update'])->middleware('VerifiedSeller');
    });