<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($slug)
    {
        $product = Product::where('slug', $slug)->with('images')->first();
        $relatedProducts = Product::where('id', '<>', $product->id)
            ->where('company_id', $product->company_id)
            ->where('status', 1)
            ->get();
        return view('customer.pages.product.index')
            ->with('relatedProducts', $relatedProducts)
            ->with('product', $product);
    }

}
