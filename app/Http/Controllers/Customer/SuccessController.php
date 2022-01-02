<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class SuccessController extends Controller
{
    public function index()
    {
        return view('customer.pages.success.index');
    }
}
