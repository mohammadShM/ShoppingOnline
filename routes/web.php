<?php

use App\Http\Controllers\AdminController\BrandController;
use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\CommentController as AdminCommentController;
use App\Http\Controllers\AdminController\DiscountController;
use App\Http\Controllers\AdminController\FeaturedCategoryController;
use App\Http\Controllers\AdminController\GalleryController;
use App\Http\Controllers\AdminController\OfferController;
use App\Http\Controllers\AdminController\PanelController;
use App\Http\Controllers\AdminController\ProductController as ProductControllerAdmin;
use App\Http\Controllers\AdminController\ProductPropertyController;
use App\Http\Controllers\AdminController\PropertyController;
use App\Http\Controllers\AdminController\PropertyGroupController;
use App\Http\Controllers\AdminController\RoleController;
use App\Http\Controllers\AdminController\SliderController;
use App\Http\Controllers\AdminController\UserController;
use App\Http\Controllers\ClientController\CartController;
use App\Http\Controllers\ClientController\CommentController as ClientCommentController;
use App\Http\Controllers\ClientController\indexController;
use App\Http\Controllers\ClientController\LikeController;
use App\Http\Controllers\ClientController\ProductController as ProductControllerClient;
use App\Http\Controllers\ClientController\RegisterController;
use Illuminate\Support\Facades\Route;

// ============================================= client =============================================
Route::prefix('')->name('client.')->group(function () {
    // ============================================= pages =============================================
    Route::get('/', [indexController::class, 'index'])->name('index');
    Route::get('productDetails/{product}', [ProductControllerClient::class, 'show'])->name('productDetails.show');
    // ============================================= comment =============================================
    Route::post('product/{product}/comments/store', [ClientCommentController::class, 'store'])
        ->name('product.comment.store');
    // ============================================= like =============================================
    Route::get('/likes/wishlist', [LikeController::class, 'index'])->name('likes.wishlist.index');
    Route::post('/likes/{product}', [LikeController::class, 'store'])->name('likes.store');
    Route::delete('/likes/{product}', [LikeController::class, 'destroy'])->name('likes.destroy');
    // ============================================= register =============================================
    Route::get('register', [RegisterController::class, 'create'])->name('register.create');
    Route::post('register/sendmail', [RegisterController::class, 'sendMail'])->name('register.sendmail');
    Route::get('register/otp/{user}', [RegisterController::class, 'otp'])->name('register.otp');
    Route::post('register/verifyOtp/{user}', [RegisterController::class, 'verifyOtp'])->name('register.verifyOtp');
    Route::delete('logout', [RegisterController::class, 'logout'])->name('logout');
    // ============================================= cart =============================================
    Route::post('cart', [CartController::class, 'store'])->name('cart.store');
});

// ============================================= admin =============================================
Route::prefix('adminPanel')->middleware([
// CheckPermission::class . ':view-dashboard',
// 'auth', //  for check user login in site
])->group(function () {
    Route::resource('/', PanelController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('brand', BrandController::class);
    // ============================================= product =============================================
    Route::resource('product', ProductControllerAdmin::class);
    Route::resource('product.gallery', GalleryController::class);
    Route::resource('product.discount', DiscountController::class);
    Route::resource('offer', OfferController::class);
    // ============================================= Slider =============================================
    Route::resource('slider', SliderController::class);
    // ============================================= comment =============================================
    Route::get('products/{product}/comments', [AdminCommentController::class, 'index'])
        ->name('product.comments.index');
    Route::get('comments/{comment}/edit', [AdminCommentController::class, 'edit'])
        ->name('product.comments.edit');
    Route::patch('comments/{comment}/update', [AdminCommentController::class, 'update'])
        ->name('product.comments.update');
    Route::patch('comments/{comment}/updateStatus', [AdminCommentController::class, 'updateStatus'])
        ->name('product.comments.updateStatus');
    Route::delete('comments/{comment}/destroy', [AdminCommentController::class, 'destroy'])
        ->name('product.comments.destroy');
    // ============================================= property =============================================
    Route::get('products/{product}/properties', [ProductPropertyController::class, 'index'])
        ->name('product.properties.index');
    Route::get('products/{product}/properties/create', [ProductPropertyController::class, 'create'])
        ->name('product.properties.create');
    Route::post('products/{product}/properties', [ProductPropertyController::class, 'store'])
        ->name('product.properties.store');
    Route::resource('propertyGroup', PropertyGroupController::class);
    Route::resource('properties', PropertyController::class);
    // ============================================= user and role =============================================
    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    // ============================================= featuredCategory =============================================
    Route::get('featuredCategory/create', [FeaturedCategoryController::class, 'create'])
        ->name('featuredCategory.create');
    Route::post('featuredCategory/store', [FeaturedCategoryController::class, 'store'])
        ->name('featuredCategory.store');
});
