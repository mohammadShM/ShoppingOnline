<?php

use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\DiscountController;
use App\Http\Controllers\AdminController\GalleryController;
use App\Http\Controllers\AdminController\PanelController;
use App\Http\Controllers\AdminController\ProductController as ProductControllerAdmin;
use App\Http\Controllers\AdminController\ProductPropertyController;
use App\Http\Controllers\AdminController\PropertyController;
use App\Http\Controllers\AdminController\PropertyGroupController;
use App\Http\Controllers\AdminController\RoleController;
use App\Http\Controllers\AdminController\UserController;
use App\Http\Controllers\clientController\indexController;
use App\Http\Controllers\clientController\ProductController as ProductControllerClient;
use App\Http\Controllers\clientController\RegisterController;
use Illuminate\Support\Facades\Route;

// client =============================================================
Route::prefix('')->name('client.')->group(function () {
    Route::get('/', [indexController::class, 'index'])->name('index');
    Route::get('productDetails/{product}', [ProductControllerClient::class, 'show'])->name('productDetails.show');
    Route::get('register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('register/sendmail', [RegisterController::class, 'sendMail'])->name('register.sendmail');
    Route::get('register/otp/{user}', [RegisterController::class, 'otp'])->name('register.otp');
    Route::post('register/verifyOtp/{user}', [RegisterController::class, 'verifyOtp'])->name('register.verifyOtp');
    Route::delete('logout', [RegisterController::class, 'logout'])->name('logout');
});

// admin =============================================================
Route::prefix('adminPanel')->middleware([
//    CheckPermission::class . ':view-dashboard',
//    'auth', // for check user login in site
])->group(function () {
    Route::resource('/', PanelController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductControllerAdmin::class);
    Route::resource('product.gallery', GalleryController::class);
    Route::resource('product.discount', DiscountController::class);
    Route::get('products/{product}/properties', [ProductPropertyController::class, 'index'])
        ->name('product.properties.index');
    Route::get('products/{product}/properties/create', [ProductPropertyController::class, 'create'])
        ->name('product.properties.create');
    Route::post('products/{product}/properties', [ProductPropertyController::class, 'store'])
        ->name('product.properties.store');
    Route::resource('propertyGroup', PropertyGroupController::class);
    Route::resource('properties', PropertyController::class);
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
});
