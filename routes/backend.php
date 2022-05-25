<?php

use App\Http\Controllers\Backend\HomeController;
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
});
