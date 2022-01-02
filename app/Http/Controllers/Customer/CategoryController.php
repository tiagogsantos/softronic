<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Company;
use App\Models\ProductFeature;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request, $company, $category = null)
    {
        if (request()->has('ajax') && request('ajax') == true) {
            $products = $this->ajaxRefresh($request, $company, $category);
            return view('customer.block.product')
            ->with('products', $products);
        }
        $company = Company::where('slug', $company)->first();
        if ($category) {
            $category = Category::where('slug', $category)->with('products')->first();
            $products = $category->products()
            ->where('company_id', $company->id)
            ->where('status', 1);
        } else {
            $products = $company->products();
        }
        $features = filterFeatures($products->pluck('products.id')->toArray());
        if (request()->has('feature_array') && request('feature_array') != "[]") {
            $featuresArray = explode(",", $request->feature_array);
            $idProducts = ProductFeature::whereIn('feature_id', $featuresArray)
                ->pluck('product_id')->toArray();
            $products = $products->whereIn('products.id', $idProducts);
        }
        $products = $products->paginate(6);
        return view('customer.pages.category.index')
            ->with('products', $products)
            ->with('company', $company)
            ->with('features', $features)
            ->with('category', $category);
    }

    public function ajaxRefresh(Request $request, $company, $category = null)
    {
        $company = Company::where('slug', $company)->first();
        if ($category) {
            $category = Category::where('slug', $category)->with('products')->first();

            $products = $category->products()
                ->where('company_id', $company->id)
                ->where('status', 1);
        } else {
            $products = $company->products();
        }

        // $products = $products->filter(function ($product) {
        //     if ($product->images()->count() > 0) {
        //         return $product;
        //     }
        // });

        $products_id = $products->pluck('products.id')->toArray();
        if (request()->has('feature_array') && request('feature_array') != "[]") {
            $featureArray = json_decode($request->feature_array);
            $idProducts = ProductFeature::whereIn('feature_id', $featureArray)
                ->pluck('product_id')->toArray();
            $products = $products->whereIn('id', $idProducts);
        }
        $products = $products->paginate(6);
        return $products;
        return view('customer.block.product')
            ->with('products', $products);
    }
}
