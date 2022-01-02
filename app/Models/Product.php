<?php

namespace App\Models;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'reference',
        'status',
        'featured',
        'new',
        'description',
        'slug',
        'softronic_id',
        'company_id',
        'meta_title',
        'meta_description',
    ];

    protected $appends = ['company', 'images', 'cart_qtd', 'main_image'];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'product_categories', 'product_id', 'category_id');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }

    public function features()
    {
        return $this->belongsToMany('App\Models\Feature', 'product_feature');
    }
    public function images()
    {
        return $this
        ->hasMany('App\Models\ProductImage', 'product_id', 'id', 'product_images')
        ->select(['*', DB::raw('IF(`order` IS NOT NULL, `order`, 1000000) `order`')])
        ->orderBy('order', 'asc');
    }

    public function getImagesAttribute()
    {
        return $this->images()->get();        
    }

    public function getMainImageAttribute()
    {
        return $this->images()->first()->link ?? null;
    }

    
    public function getCompanyAttribute()
    {
        return  $this->company()->first();        
    }
    public function getCartQtdAttribute()
    {
        $result = Cart::search(function($cartItem, $rowId){
            return $cartItem->id === $this->id;
        })->first();
        return $result->qty ?? 0;
      
    }
}
