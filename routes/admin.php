<?php
    use App\Http\Controllers\Admin\AdminController;
    use App\Http\Controllers\Admin\ProductController;
    use App\Http\Controllers\Admin\SellerController;
    use App\Http\Controllers\Admin\PromotionController;
    use App\Http\Controllers\MerchandiseController;
    use App\Http\Controllers\Admin\MerchandiseCategoryController;
    use App\Http\Controllers\FeedbackController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('admin')->middleware('CheckRole:admin')->name('admin.')->group(function () {
        Route::redirect('/', 'admin/dashboard');
        Route::get('dashboard' , [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('product', ProductController::class)->only(['index', 'show', 'destroy']);
        Route::resource('seller', SellerController::class)->only(['index', 'show']);
        Route::resource('promotion', PromotionController::class)->only(['index', 'show', 'update']);
        Route::resource('merchandise', MerchandiseController::class)->except(['edit']);
        Route::resource('merchandise-category', MerchandiseCategoryController::class)->except(['edit']);
        Route::prefix('account-verification')->name('account-verification.')->group(function () {
            Route::get('/' , [SellerController::class, 'requestVerification'])->name('index');
            Route::get('/{seller}' , [SellerController::class, 'detailVerification'])->name('show');
            Route::put('/{seller}' , [SellerController::class, 'accountVerificationUpdate'])->name('update');
            Route::get('/{seller}/download' , [SellerController::class, 'identityCardDownload'])->name('download');
        });
        Route::resource('feedback', FeedbackController::class)->except(['store', 'edit', 'create']);
    });

?>  