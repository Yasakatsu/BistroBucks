<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Models\Shop;
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

Route::get('/dashboard', function () { // ダッシュボード
    $user = auth()->user(); // ログインユーザーを取得
    $shopName = Shop::query() // Shopモデルを使い、クエリビルダを取得
        ->where('user_id', $user->id) // ログインユーザーのIDを条件に指定
        ->value('name'); // nameカラムの値を取得
    return Inertia::render(
        'Dashboard',
        [
            'title' => 'Dashboard',
            'metaDescription' => 'BistroBucksは、飲食店の利益管理を簡単にするためのアプリです。売上、コスト、利益率をリアルタイムで追跡し、店舗経営を効率化します。誰でも簡単に使える直感的なデザインで、経営の見える化を実現します。',
            'userName' => $user->name, // ログインユーザーの名前
            'shopName' => $shopName, // ログインユーザーの店舗名
        ]
    ); // inertia.jsのrenderメソッドを使い、スムーズなページ遷移を実現
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () { //auth（認証）ミドルウェアを適用したグループ
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); //プロフィール編集画面
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); //プロフィール更新
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); //プロフィール削除   
});

Route::middleware('auth')->group(function () { //auth（認証）ミドルウェアを適用したグループ
    Route::get('/sale', [SaleController::class, 'index'])->name('sale.index'); //売上一覧
});




require __DIR__ . '/auth.php'; //認証関連のルーティング
