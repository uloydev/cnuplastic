<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// jangan diapus briq
require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
