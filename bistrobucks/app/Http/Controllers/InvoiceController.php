<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * リソースの一覧を表示する
     */
    public function index()
    {
        // Invoiceモデル情報を取得
        $invoices = Invoice::all();
        // 取得したデータを返却する
        return $invoices;
    }

    /**
     *  新しいリソースを作成する
     */
    public function create()
    {
        //
    }

    /**
     *  新しいリソースを保存する
     */
    public function store(Request $request)
    {
        //　リクエストデータを取得
        $data = $request->all();
        // データを保存
        $invoice = Invoice::create($data);
        // 保存したデータを返却
        return $invoice;
    }

    /**
     * 指定されたリソースを表示する
     */
    public function show(string $id)
    {
        // 指定されたIDのデータを取得
        $invoice = Invoice::find($id);
        // 取得したデータを返却
        return $invoice;
    }

    /**
     *  指定されたリソースを編集する
     */
    public function edit(string $id)
    {
        //　指定されたIDのデータを取得
        $invoice = Invoice::find($id);
        // 取得したデータを返却
        return $invoice;
    }

    /**
     * 指定されたリソースを更新する
     */
    public function update(Request $request, string $id)
    {
        // リクエストデータを取得
        $data = $request->all();
        // 指定されたIDのデータを取得
        $invoice = Invoice::find($id);
        // データを更新
        $invoice->update($data);
        // 更新したデータを返却
        return $invoice;
    }

    /**
     * 指定されたリソースを削除する
     */
    public function destroy(string $id)
    {
        // 指定されたIDのデータを取得
        $invoice = Invoice::find($id);
        // データを削除
        $invoice->delete();
        // 削除したデータを返却
        return $invoice;
    }
}
