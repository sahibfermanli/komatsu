<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SocialController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth']], static function () {
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

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], static function () {
        Route::get('/', [SettingController::class, 'index'])->name('index');
        Route::get('/list', [SettingController::class, 'list'])->name('list');
        Route::post('/update', [SettingController::class, 'update'])->name('update');
    });
});
