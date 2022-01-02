<?php

namespace App\Http\Controllers\Customer;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductFeature;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $products = Product::where('status', 1);
        $features = filterFeatures($products->pluck('id')->toArray());
        if (request()->has('search_string') && request('search_string') != "") {
            $products = $products->where('name', 'like', "%{$request->search_string}%");
        }
        if (request()->has('feature_array') && request('feature_array') != "[]") {
            $featuresArray = explode(",", $request->feature_array);
            $idProducts = ProductFeature::whereIn('feature_id', $featuresArray)
                ->pluck('product_id')->toArray();
            $products = $products->whereIn('id', $idProducts);
        }
        $products = $products->paginate(6);

        return view('customer.pages.search.index')
            ->with('features', $features)
            ->with('products', $products);
    }
    public function products()
    {
        $products = Product::where('status', 1);
        $features = filterFeatures($products->pluck('id')->toArray());
        $products = $products->paginate(6);
        return view('customer.pages.search.index')
            ->with('features', $features)
            ->with('products', $products);
    }

    public function ajaxRefresh(Request $request)
    {
        $search_string = Input::get('search_string');
        if ($search_string == null || $search_string == "") {
            $products =  Product::where('status', 1);
        } else {
            $products = Product::where('name', 'like', "%{$search_string}%");
        }

        // $products = $products->filter(function ($product) {
        //     if ($product->images()->count() > 0) {
        //         return $product;
        //     }
        // });

        $products_id = $products->pluck('id')->toArray();
        if (request()->has('feature_array') && request('feature_array') != "[]") {
            $idProducts = ProductFeature::whereIn('feature_id', json_decode($request->feature_array))
                ->pluck('product_id')->toArray();
            $products = $products->whereIn('id', $idProducts);
        }
        $products = $products->paginate(6);

        return view('customer.block.product')
            ->with('products', $products);
    }
}
