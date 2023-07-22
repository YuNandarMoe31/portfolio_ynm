<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LocalizationController;

Route::get('about', [AboutController::class, 'index'])->name('about-page');
// Localization
Route::middleware('lang')->group(function() {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('lang/{lang}', [LocalizationController::class, 'index']);
});
