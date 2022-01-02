<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
    protected $table = 'product_feature';
    protected $fillable = [
        'product_id',
        'feature_id'
    ];
}
