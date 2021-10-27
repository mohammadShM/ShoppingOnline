<?php

use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\PanelController;
use App\Http\Controllers\clientController\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class,'index']);

Route::prefix('adminPanel')->group(function () {
    Route::resource('/', PanelController::class);
    Route::resource('/category', CategoryController::class);
});
