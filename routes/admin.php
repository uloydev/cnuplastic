<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PaymentSettingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('CheckRole:admin')->name('admin.')->group(function () {
    Route::redirect('/', 'admin/dashboard');
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('product', ProductController::class)->only([
        'index', 'show', 'destroy'
    ]);
    Route::resource('user', SellerController::class)->only(['index', 'show']);
    Route::resource('promotion', PromotionController::class)->only(['index', 'show', 'update']);
    Route::prefix('account-verification')->name('account-verification.')
    ->group(function () {
        Route::get('/', [SellerController::class, 'requestVerification'])->name('index');
        Route::get('/{seller}', [SellerController::class, 'detailVerification'])->name('show');
        Route::put('/{seller}', [SellerController::class, 'accountVerificationUpdate'])->name('update');
        Route::get('/{seller}/download', [SellerController::class, 'identityCardDownload'])->name('download');
    });
    Route::resource('feedback', FeedbackController::class)->except([
        'store', 'edit', 'create'
    ]);

    Route::prefix('order')->name('order.')->group(function () {
        Route::get('status/{status}', [OrderController::class, 'filter'])->name(
            'filter'
        );
        Route::put('{order}', [OrderController::class, 'verif'])->name('verif');
        Route::get('{order}', [OrderController::class, 'show'])->name('show');
    });

    Route::prefix('payment')->name('payment.')->group(function () {
        Route::get('/', [PaymentSettingController::class, 'index'])->name('index');
        Route::put('/', [PaymentSettingController::class, 'update'])->name('update');
    });
});
