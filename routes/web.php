<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PageController;

// Localization
Route::middleware('lang')->group(function () {
    // Index
    // Route::get('/', function () {
    //     return view('index');
    // });
    Route::get('/', [PageController::class, 'index'])->name('about');

    Route::get('lang/{lang}', [LocalizationController::class, 'index']);

    // About Page
    Route::get('about', [PageController::class, 'aboutIndex'])->name('about');

    //For storing an image
    Route::post('about', [PageController::class, 'imageStore'])->name('about.store');
});
