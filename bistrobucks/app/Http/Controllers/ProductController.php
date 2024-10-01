<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() // 商品一覧を表示
    {}

    /**
     * Show the form for creating a new resource.
     */
    public function create() // 商品を新規登録するフォームを表示
    {
        //
    }


    public function store(Request $request, ProductService $productService) // 商品を新規登録
    {
        $validated = $request->validate([ // バリデーション
            'shop_id' => 'required|exists:shops,id',
            'name' => 'required|string',
            'category' => 'nullable|string',
            'unit_price' => 'required|numeric|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'image_path' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $version = $productService->handleProductVersioning($validated); // 商品のバージョニングを処理
        $product = $productService->createProduct($validated, $version); // 商品を作成

        return response()->json(['message' => '商品が登録されました', 'product' => $product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // 商品の詳細を表示
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) // 商品情報を編集するフォームを表示
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) // 商品情報を更新
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string',
            'unit_price' => 'required|numeric|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'image_path' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // ソフトデリートされたレコードも含めて検索
        $product = Product::withTrashed()->findOrFail($id); // 指定したIDの商品を取得(削除済みの商品も含む)
        $product->update($validated); // 商品情報を更新(バリデーション済み)
        return response()->json(['message' => '商品情報の更新が完了しました', 'product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // 商品を削除
    {
        //
    }
}
