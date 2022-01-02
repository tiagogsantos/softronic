<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BudgetItem extends Model
{
    protected $fillable = [
        'qtd',
        'product_name',
        'product_reference',
        'product_id',
        'product_image',
        'budget_id'
    ];
}
