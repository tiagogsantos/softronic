<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function about()
    {
        return view('customer.pages.about.index');
    }

    public function afterSale()
    {
        return view('customer.pages.after-sale.index');
    }

    public function policy()
    {
        return view('customer.pages.policy.index');
    }
}
