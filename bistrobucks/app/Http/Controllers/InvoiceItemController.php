<?php

namespace App\Http\Controllers;

use App\Models\InvoiceItem;
use Illuminate\Http\Request;

class InvoiceItemController extends Controller
{
    /**
     * Display a listing of the resource.// リソースの一覧を表示する
     */
    public function index()
    {
        // InvoiceItemモデルから全ての請求書アイテム情報を取得
        $invoiceItems = InvoiceItem::all();
        // 取得したデータを返却する
        return $invoiceItems;
    }

    /**
     * Show the form for creating a new resource.// 新しいリソースを作成する
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.// 新しいリソースを保存する
     */
    public function store(Request $request)
    {
        // リクエストデータを取得
        $data = $request->all();
        // データを保存
        $invoiceItem = InvoiceItem::create($data);
        // 保存したデータを返却
        return $invoiceItem;
    }

    /**
     * Display the specified resource.// 指定されたリソースを表示する
     */
    public function show(string $id)
    {
        //  指定されたIDのデータを取得
        $invoiceItem = InvoiceItem::find($id);
        // 取得したデータを返却
        return $invoiceItem;
    }

    /**
     * Show the form for editing the specified resource.// 指定されたリソースを編集する
     */
    public function edit(string $id)
    {
        // 指定されたIDのデータを取得
        $invoiceItem = InvoiceItem::find($id);
        // 取得したデータを返却
        return $invoiceItem;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // リクエストデータを取得
        $data = $request->all();
        // 指定されたIDのデータを取得
        $invoiceItem = InvoiceItem::find($id);
        // データを更新
        $invoiceItem->update($data);
        // 更新したデータを返却
        return $invoiceItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //　指定されたIDのデータを取得
        $invoiceItem = InvoiceItem::find($id);
        // データを削除
        $invoiceItem->delete();
    }
}
