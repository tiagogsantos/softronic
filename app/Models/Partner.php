<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable =[
        'company',
        'cnpj',
        'contact',
        'street',
        'number',
        'complement',
        'neighborhood',
        'zip_code',
        'city',
        'uf',
        'phone',
        'ramal',
        'email',

    ];
}
