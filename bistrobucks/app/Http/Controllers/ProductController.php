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
        //　Productモデル情報を取得
        $products = Product::all();
        // 取得したデータを返却する
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  リクエストデータを取得
        $data = $request->all();
        // データを保存
        $product = Product::create($data);
        // 保存したデータを返却
        return $product;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 指定されたIDのデータを取得
        $product = Product::find($id);
        // 取得したデータを返却
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // 指定されたIDのデータを取得
        $product = Product::find($id);
        // 取得したデータを返却
        return $product;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // リクエストデータを取得
        $data = $request->all();
        // 指定されたIDのデータを取得
        $product = Product::find($id);
        // データを更新
        $product->update($data);
        // 更新したデータを返却
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 指定されたIDのデータを取得
        $product = Product::find($id);
        // データを削除
        $product->delete();
        // 削除したデータを返却
        return $product;}
}
