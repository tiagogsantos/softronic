<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $product = Product::where('id', $request->product_id)->first();
        $result = Cart::search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id == $product->id;
        })->first();
        if ($result) {
            Cart::update($result->rowId, $request->qtd);
        } else {
            if ($request->qtd != 0) {
                Cart::add(
                    $product->id,
                    $product->name,
                    $request->qtd,
                    0.01,
                    0,
                    [
                        'product_reference' => $product->reference,
                        'main_image' => $product->main_image,
                    ]
                );
            }
        }

        return response()
            ->json([
                'cart' => Cart::content(),
                'total_items' => Cart::countItems(),
            ], 200);
    }

    public function update(Request $request)
    {
        Cart::update($request->rowId, $request->qtd);
        return response()
            ->json([
                'cart' => Cart::content(),
                'total_items' => Cart::countItems(),
            ], 200);
    }
    public function delete(Request $request)
    {
        Cart::remove($request->rowId);

        return response()
            ->json([
                'cart' => Cart::content(),
                'total_items' => Cart::countItems(),
            ], 200);
    }
}
