<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Middleware\Frontend\LanguageMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', [LanguageController::class, 'set_locale_language'])->name("set_locale_language");

Route::middleware(LanguageMiddleware::class)->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
});
