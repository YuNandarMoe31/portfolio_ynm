<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PageController;

// Localization
Route::middleware('lang')->group(function () {
    // index
    Route::get('/', [PageController::class, 'index'])->name('about');

    // localization
    Route::get('lang/{lang}', [LocalizationController::class, 'index']);

    // about page
    Route::get('about', [PageController::class, 'aboutIndex'])->name('about');

    // store image
    Route::post('about', [PageController::class, 'imageStore'])->name('about.store');

    // download cv form
    Route::get('/download', [PageController::class, 'downloadWordFile'])->name('download');
});
