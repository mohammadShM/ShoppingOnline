<?php

use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\DiscountController;
use App\Http\Controllers\AdminController\GalleryController;
use App\Http\Controllers\AdminController\PanelController;
use App\Http\Controllers\AdminController\ProductController as ProductControllerAdmin;
use App\Http\Controllers\clientController\indexController;
use App\Http\Controllers\clientController\ProductController as ProductControllerClient;
use Illuminate\Support\Facades\Route;

// client =============================================================
Route::prefix('')->group(function () {
    Route::get('/', [indexController::class, 'index'])->name('home');
    Route::get('productDetails/{product}', [ProductControllerClient::class, 'show'])->name('productDetails.show');
});

// admin =============================================================
Route::prefix('adminPanel')->group(function () {
    Route::resource('/', PanelController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductControllerAdmin::class);
    Route::resource('product.gallery', GalleryController::class);
    Route::resource('product.discount', DiscountController::class);
});
