<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'name' => 'required|string',
            'category' => 'nullable|string',
            'unit_price' => 'required|numeric|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'image_path' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // 同じ名前の商品が存在する場合、バージョンをインクリメント
        $latestProduct = Product::where('name', $validated['name']) // 商品名が一致(同じ商品のみ)
            ->where('shop_id', $validated['shop_id']) // 店舗IDが一致(同じ店舗の商品のみ)
            ->orderBy('version', 'desc') // バージョンの降順(新しい順)
            ->first(); // 一番新しい商品を取得(存在しない場合はnull)

        // 新しいバージョンの商品を作成するためのバージョン番号を取得し、変数$versionに代入
        $version = $latestProduct ? $latestProduct->version + 1 : 1; // バージョンが存在する場合はインクリメント、存在しない場合は[1]

        // 古いバージョンの商品を非アクティブにする
        if ($latestProduct) { // バージョンが存在する場合
            $latestProduct->update(['end_date' => now()]); // 現在日時で販売終了日を更新(非アクティブ化)
        }

        // 新しいバージョンの商品を作成
        $product = Product::create([
            'shop_id' => $validated['shop_id'],
            'name' => $validated['name'],
            'category' => $validated['category'],
            'unit_price' => $validated['unit_price'],
            'start_date' => $validated['start_date'],
            'end_date' => $validated['end_date'],
            'image_path' => $validated['image_path'],
            'description' => $validated['description'],
            'version' => $version,
        ]);

        return response()->json(['message' => '商品が登録されました', 'product' => $product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
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
    public function destroy(string $id)
    {
        //
    }
}
