<?php

use App\Http\Controllers\Backend\HomeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth']], static function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
});
