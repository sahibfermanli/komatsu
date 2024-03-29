<?php

use App\Http\Controllers\Backend\BrochureController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin123', 'as' => 'backend.', 'middleware' => ['auth']], static function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'users', 'as' => 'users.'], static function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/list', [UserController::class, 'list'])->name('list');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::post('/update/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'categories', 'as' => 'categories.'], static function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/list', [CategoryController::class, 'list'])->name('list');
        Route::post('/store', [CategoryController::class, 'store'])->name('store');
        Route::post('/update/{category}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{category}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'products', 'as' => 'products.'], static function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/list', [ProductController::class, 'list'])->name('list');
        Route::post('/store', [ProductController::class, 'store'])->name('store');
        Route::post('/update/{product}', [ProductController::class, 'update'])->name('update');
        Route::delete('/delete/{product}', [ProductController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'socials', 'as' => 'socials.'], static function () {
        Route::get('/', [SocialController::class, 'index'])->name('index');
        Route::get('/list', [SocialController::class, 'list'])->name('list');
        Route::post('/store', [SocialController::class, 'store'])->name('store');
        Route::post('/update/{social}', [SocialController::class, 'update'])->name('update');
        Route::delete('/delete/{social}', [SocialController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'services', 'as' => 'services.'], static function () {
        Route::get('/', [ServiceController::class, 'index'])->name('index');
        Route::get('/list', [ServiceController::class, 'list'])->name('list');
        Route::post('/store', [ServiceController::class, 'store'])->name('store');
        Route::post('/update/{service}', [ServiceController::class, 'update'])->name('update');
        Route::delete('/delete/{service}', [ServiceController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'messages', 'as' => 'messages.'], static function () {
        Route::get('/', [MessageController::class, 'index'])->name('index');
        Route::get('/list', [MessageController::class, 'list'])->name('list');
        Route::delete('/delete/{message}', [MessageController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'sliders', 'as' => 'sliders.'], static function () {
        Route::get('/', [SliderController::class, 'index'])->name('index');
        Route::get('/list', [SliderController::class, 'list'])->name('list');
        Route::post('/store', [SliderController::class, 'store'])->name('store');
        Route::post('/update/{slider}', [SliderController::class, 'update'])->name('update');
        Route::delete('/delete/{slider}', [SliderController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'partners', 'as' => 'partners.'], static function () {
        Route::get('/', [PartnerController::class, 'index'])->name('index');
        Route::get('/list', [PartnerController::class, 'list'])->name('list');
        Route::post('/store', [PartnerController::class, 'store'])->name('store');
        Route::post('/update/{partner}', [PartnerController::class, 'update'])->name('update');
        Route::delete('/delete/{partner}', [PartnerController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'brochures', 'as' => 'brochures.'], static function () {
        Route::get('/', [BrochureController::class, 'index'])->name('index');
        Route::get('/list', [BrochureController::class, 'list'])->name('list');
        Route::post('/store', [BrochureController::class, 'store'])->name('store');
        Route::post('/update/{brochure}', [BrochureController::class, 'update'])->name('update');
        Route::delete('/delete/{brochure}', [BrochureController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], static function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::get('/list', [SettingController::class, 'list'])->name('list');
        Route::post('/update', [SettingController::class, 'update'])->name('update');
    });
});
