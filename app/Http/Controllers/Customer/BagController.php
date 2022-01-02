<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Services\BudgetService;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class BagController extends Controller
{

    public function index()
    {
        $cart = Cart::content();
        return view('customer.pages.bag.index')
            ->with('cart', $cart);
    }

    public function finish(BudgetService $budgetService)
    {
        $cart = Cart::content();
        if (Auth::guard('customer')->check()) {
            $customer = Auth::guard('customer')->user();
            $data = [
                'customer_id' => $customer->id,
                'name' => $customer->name,
                'phone' => $customer->phone,
                'cpf' => $customer->cpf,
                'email' => $customer->email,
                'company_name' => $customer->company_name,
                'cnpj' => $customer->cnpj,
                'inscricao_estadual' => $customer->inscricao_estadual,
                'zip_code' => $customer->zip_code,
                'street' => $customer->street,
                'city' => $customer->city,
            ];
            $cartItems = $budgetService->setItemsCart($cart);
            $data['total_items'] = count($cartItems);
            $budgetService->create($data, $cartItems);
            return redirect('/')
                ->with('success', 'Pedido gerado com sucesso');
        }
        return redirect()
            ->route('login.show');
    }
}
