<?php

use App\Http\Controllers\Seller\ProductController;
use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;


    Route::middleware('CheckRole:user')->name('user.')->group(function () {
        Route::get('dashboard' , [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('account-setting', [UserController::class, 'accountSetting'])->name('account-setting');
        Route::put('update-account', [UserController::class, 'update'])->name('update-account');
        Route::get('account-verification', [UserController::class, 'statusVerification'])->name('account-verification');
        Route::post('account-verification', [UserController::class, 'storeVerification']);
        Route::prefix('order')->name('order.')->group(function () {
            Route::get('unpaid' , [UserController::class, 'unpaidOrder'])->name('unpaid');
            Route::get('paid' , [UserController::class, 'paidOrder'])->name('paid');
            Route::get('success' , [UserController::class, 'orderSuccess'])->name('success');
            Route::post('/store', [UserController::class, 'placeOrder'])->name('store');
            Route::get('/{order}' , [UserController::class, 'orderDetail'])->name('show');
            Route::delete('/{order}' , [UserController::class, 'orderDestroy'])->name('destroy');
            Route::get('/{order}/pay' , [UserController::class, 'paymentPage'])->name('pay');
            Route::post('/{order}/pay' , [UserController::class, 'payOrder']);
            Route::post('/{order}/rate' , [UserController::class, 'rateProduct'])->name('rate-product');
        });
    });