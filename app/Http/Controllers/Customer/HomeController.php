<?php

namespace App\Http\Controllers\Customer;

use App\Models\Banner;
use App\Models\Company;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::get();
        
        $featuredProducts = Product::where('status', 1)
            ->where('featured', 1)
            ->get();

        $newProducts = Product::where('status', 1)
            ->where('new', 1)
            ->get();

        return view('customer.pages.home.index')
            ->with('newProducts', $newProducts)
            ->with('banners', $banners)
            ->with('featuredProducts', $featuredProducts);
    }
}
