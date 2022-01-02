<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable =[
        'name',
        'phone',
        'cpf',
        'email',
        'company_name',
        'cnpj',
        'inscricao_estadual',
        'zip_code',
        'street',
        'city',
        'customer_id',
        'total_items',
    ];

    public function items()
    {
        return $this->hasMany(BudgetItem::class, 'budget_id');
    }
}
