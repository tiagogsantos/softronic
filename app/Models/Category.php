<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'status',
        'description',
        'slug',
        'meta_title',
        'meta_description',
        'softronic_id',
        'category_id',
    ];
    protected $appends = ['links'];

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_categories', 'category_id', 'product_id');
    }

    public function subcategories()
    {
        return $this->hasMany('App\Models\Category', 'category_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

    public function getLinksAttribute() : array{
        return [
            'category' => $this->slug,
            'main' => config('app.url'),
        ];
    }
}
