<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    protected $fillable = [
        'name',
        'feature_id',
    ];
    protected $appends = ['features'];


    public function features()
    {
        return $this->hasMany('App\Models\Feature', 'feature_id');
    }

    public function feature()
    {
        return $this->belongsTo('App\Models\Feature', 'feature_id');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'product_feature');
    }


    public function getFeaturesAttribute()
    {
        return  $this->features()->get();
        
    }
}
