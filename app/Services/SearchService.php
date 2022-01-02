<?php

namespace App\Services;

class SearchService
{
    public static function index(array $data)
    {
        $products_id = $products->pluck('id')->toArray();
        if (request()->has('feature_array') && request('feature_array') != "[]") {

            $idProducts = ProductFeature::whereIn('feature_id', json_decode($request->feature_array))
                ->pluck('product_id')->toArray();
            $products = $products->whereIn('id', $idProducts);
        }
        return $products->paginate(6);
    }
}