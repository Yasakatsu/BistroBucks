<?php

namespace App\Http\Controllers;

use App\Models\SaleDetail;
use Illuminate\Http\Request;

class SaleDetailController extends Controller
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
    public function create() {}

    /**
     * 新しいリソースを保存する
     */
    public function store(Request $request)
    {
        //バリデーション
        $validated = $request->validate([
            'sale_id' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'item_price' => 'required',
            'item_price_excluding_tax' => 'required',
            'sale_amount' => 'required',
        ]);
        // SaleDetailモデルを使用して新しいレコードを作成
        $saleDetailRecord = SaleDetail::create($validated);
        // レスポンスを返す(Inertia.jsのためにJSON形式で返す)
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
