<?php

namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function handleProductVersioning($validated) //商品のバージョニングを処理する
    {
        $latestProduct = Product::where('name', $validated['name'])
            ->where('shop_id', $validated['shop_id'])
            ->orderBy('version', 'desc')
            ->first();

        $version = $latestProduct ? $latestProduct->version + 1 : 1;

        if ($latestProduct) {
            $latestProduct->update(['end_date' => now()]);
        }

        return $version;
    }

    public function createProduct($validated, $version) //商品を作成する
    {
        return Product::create([
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
    }
}
