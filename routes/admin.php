<?php
    use App\Http\Controllers\Admin\AdminController;
    use App\Http\Controllers\Admin\ProductController;
    use App\Http\Controllers\Admin\SellerController;
    use App\Http\Controllers\Admin\PromotionController;
    use App\Http\Controllers\Admin\MerchandiseController;
    use App\Http\Controllers\Admin\MerchandiseCategoryController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('admin')->middleware('CheckRole:admin')->name('admin.')->group(function () {
        Route::redirect('/', '/dashboard');
        Route::get('dashboard' , [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('product', ProductController::class)->only(['index', 'show', 'destroy']);
        Route::resource('seller', SellerController::class)->only(['index', 'show']);
        Route::resource('promotion', PromotionController::class)->only(['index', 'show']);
        Route::resource('merchandise', MerchandiseController::class)->except(['edit']);
        Route::resource('merchandise-category', MerchandiseCategoryController::class)->except(['edit']);
    });

?>  