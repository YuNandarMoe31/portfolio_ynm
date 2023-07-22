<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PageController;

// Localization
Route::middleware('lang')->group(function () {
    // Index
    Route::get('/', function () {
        return view('index');
    });
    Route::get('lang/{lang}', [LocalizationController::class, 'index']);

    // About Page
    Route::get('about', [PageController::class, 'index'])->name('about');
});
