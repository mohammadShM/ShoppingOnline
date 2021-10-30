<?php

use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\PanelController;
use App\Http\Controllers\AdminController\ProductController;
use App\Http\Controllers\clientController\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'])->name('home');

Route::prefix('adminPanel')->group(function () {
    Route::resource('/', PanelController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/product', ProductController::class);
});
