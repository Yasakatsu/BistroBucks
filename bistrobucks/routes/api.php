<?php

use App\Http\Controllers\BreakEvenPointController;
use App\Http\Controllers\CostController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TaxController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// BreakEvenPointControllerのresourceを定義
Route::resource('break-even-point', BreakEvenPointController::class);
// CostControllerのresourceを定義
Route::resource('cost', CostController::class);
// InvoiceControllerのresourceを定義
Route::resource('invoice', InvoiceController::class);
// InvoiceItemControllerのresourceを定義
Route::resource('invoice-item', InvoiceItemController::class);
// ProductControllerのresourceを定義
Route::resource('product', ProductController::class);
// ReportControllerのresourceを定義
Route::resource('report', ReportController::class);
// ShopControllerのresourceを定義
Route::resource('shop', ShopController::class);
// TaxControllerのresourceを定義
Route::resource('tax', TaxController::class);
// UserControllerのresourceを定義
