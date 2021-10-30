<?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;


    Route::middleware('CheckRole:user')->name('user.')->group(function () {
        Route::get('dashboard' , [UserController::class, 'dashboard'])->name('dashboard');
        Route::get('account-setting', [UserController::class, 'accountSetting'])->name('account-setting');
        Route::put('update-account', [UserController::class, 'update'])->name('update-account');
        Route::get('account-verification', [UserController::class, 'statusVerification'])->name('account-verification');
        Route::post('account-verification', [UserController::class, 'storeVerification']);
        Route::resource('product', ProductController::class)->except(['edit'])->middleware('VerifiedSeller');
        Route::resource('promotion', PromotionController::class)->except(['edit, update'])->middleware('VerifiedSeller');
        Route::prefix('order')->name('order.')->group(function () {
            Route::get('unpaid' , [UserController::class, 'unpaidOrder'])->name('unpaid');
            Route::get('paid' , [UserController::class, 'paidOrder'])->name('paid');
            Route::get('success' , [UserController::class, 'orderSuccess'])->name('success');
            Route::get('/{order}' , [UserController::class, 'orderDetail'])->name('show');
            Route::delete('/{order}' , [UserController::class, 'orderDestroy'])->name('destroy');
            Route::get('/{order}/pay' , [UserController::class, 'paymentPage'])->name('pay');
            Route::post('/{order}/pay' , [UserController::class, 'payOrder']);
        });
    });