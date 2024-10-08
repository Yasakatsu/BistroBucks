<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


////////////////////////
//ログイン前のルーティング//
///////////////////////
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//ログイン後のルーティング

Route::get('/dashboard', function () { //ダッシュボード
    return Inertia::render('Dashboard'); //inertia.jsのrenderメソッドを使い、スムーズなページ遷移を実現（reactのようなSPAを実現）
})->middleware(['auth', 'verified'])->name('dashboard'); //middlewareメソッドで、ログインとメール認証が必要なページに設定

Route::middleware('auth')->group(function () { //auth（認証）ミドルウェアを適用したグループ
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); //プロフィール編集画面
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); //プロフィール更新
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); //プロフィール削除    // testファイルを表示するためのルーティング(reactを使用したview画面を表示するテスト用のメソッド)
});

Route::get('sale/dashboard', [SaleController::class, 'index'])->name('sale.dashboard'); //売上ダッシュボード



require __DIR__ . '/auth.php'; //認証関連のルーティング
