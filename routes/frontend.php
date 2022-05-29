<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CategoryController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Middleware\Frontend\LanguageMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', [LanguageController::class, 'set_locale_language'])->name("set_locale_language");

Route::middleware(LanguageMiddleware::class)->group(function() {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

    Route::group(['prefix' => 'categories', 'as' => 'categories.'], static function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/{category}', [CategoryController::class, 'sub_categories'])->name('sub_categories');

        Route::group(['prefix' => 'products', 'as' => 'products.'], static function () {
            Route::get('/{category}', [ProductController::class, 'index'])->name('index');
            Route::get('/{category}/{product}', [ProductController::class, 'show'])->name('show');
        });
    });
});

Route::post('contact/send-message', [ContactController::class, 'send_message'])->name('contact.send_message');
