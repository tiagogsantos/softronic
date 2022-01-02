<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'link',
        'product_id',
        'order'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\User', 'product_id');
    }
}
