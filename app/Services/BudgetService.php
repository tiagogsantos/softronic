<?php

namespace App\Services;

use App\Models\Budget;
use Illuminate\Support\Collection;

class BudgetService
{
    protected $budget;

    public function __construct()
    {
        $this->budget = new Budget();
    }

    public function create(array $data, $items)
    {
        $budget = $this->budget->create($data);

        foreach ($items as $item) {
            $budget->items()->create($item);
        }
        
        return $budget->with(['items']);
    }

    public function setItemsCart(Collection $cartContent)
    {
        return $cartContent->map(function ($cartItem) {
            return [
                "qtd" => $cartItem->qty,
                "product_name" => $cartItem->name,
                "product_reference" => $cartItem->options['product_reference'],
                "product_id" => $cartItem->id,
                "product_image" => $cartItem->options['main_image'],
            ];
        });
    }
}
