<?php
    use App\Http\Controllers\Admin\AdminController;
    use Illuminate\Support\Facades\Route;

    Route::prefix('admin')->middleware('CheckRole:admin')->name('admin.')->group(function () {
        Route::get('dashboard' , [AdminController::class, 'dashboard'])->name('dashboard');
    });
?>  