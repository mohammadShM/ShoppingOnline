<?php

use App\Http\Controllers\AdminController\CategoryController;
use App\Http\Controllers\AdminController\PanelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.index');
});

Route::prefix('adminPanel')->group(function () {
    Route::resource('/', PanelController::class);
    Route::resource('/category', CategoryController::class);
});
