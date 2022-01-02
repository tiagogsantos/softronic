<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Services\ContactService;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\CustomerService;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    protected $customerService;
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }
    public function index()
    {
        return view('customer.pages.register.index');
    }
    public function store(RegisterRequest $registerRequest)
    {
        try {
            $customer = $this->customerService->create($registerRequest->all());
        } catch (\Throwable $th) {
            Log::debug($th);
            return redirect()
                ->back()
                ->withInputs()
                ->with('error', 'Tivemos um problema no servidor, pedimos que entre em contato com nosssos administradores');
        }
        return redirect('/');
    }
}
