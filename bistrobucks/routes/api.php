<?php

use App\Http\Controllers\DailyCostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SalesDetailController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\ShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// ProductControllerのresourceを定義
Route::resource('products', ProductController::class);
// SaleControllerのresourceを定義
Route::resource('sales', SaleController::class);
// SalesDetailControllerのresourceを定義
Route::resource('sales-details', SalesDetailController::class);
// DailyCostControllerのresourceを定義
Route::resource('daily-costs', DailyCostController::class);
// SettingControllerのresourceを定義
Route::resource('settings', SettingController::class);
// ShopControllerのresourceを定義
Route::resource('shops', ShopController::class);
// 

