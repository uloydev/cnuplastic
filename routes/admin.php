<?php
    use App\Http\Controllers\Admin\AdminController;
    use App\Http\Controllers\Admin\ProductController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('admin')->middleware('CheckRole:admin')->name('admin.')->group(function () {
        Route::redirect('/', '/dashboard');
        Route::get('dashboard' , [AdminController::class, 'dashboard'])->name('dashboard');
        Route::resource('product', ProductController::class)->only(['index', 'show', 'destroy']);
    });

?>  