<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LocalizationController;

// Localization
Route::middleware('lang')->group(function() {
    Route::get('/', function () {
        return view('index');
    });
    Route::get('lang/{lang}', [LocalizationController::class, 'index']);
});