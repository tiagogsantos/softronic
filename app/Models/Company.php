<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
    ];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'company_id');
    }

    public function categories($companySlug)
    {
        $companySlug = $companySlug ? $companySlug : 'logitech';
        $categoriesCompany = [];
        $subcategoriesCompany = [];

        $company = Company::where('slug', $companySlug)->first();
        $idProducts = Product::where('company_id', $company->id)->pluck('id')->toArray();

        $categories = Category::where('status', 1)
            ->whereNull('category_id')->get();

        $subcategories = Category::where('status', 1)
            ->whereNotNull('category_id')->get();

        
        foreach ($categories as $key => $category) {
            $totalProducts = $category->products()->whereIn('product_id', $idProducts)->count();
            if ($totalProducts > 0) {
                $category->companySlug = $companySlug;

                array_push($categoriesCompany, $category);
            }
        }
        foreach ($subcategories as $key => $subcategory) {
            $totalProducts = $subcategory->products()->whereIn('product_id', $idProducts)->count();
            if ($totalProducts > 0) {
                $subcategory->companySlug = $companySlug;
                $subcategory->category->companySlug = $companySlug;
                array_push($subcategoriesCompany, $subcategory);
                if(!in_array($category,$categoriesCompany)){
                    array_push($categoriesCompany, $subcategory->category);
                }
            }
        }
        return [
            'subcategories' => $subcategoriesCompany,
            'categories' => $categoriesCompany,
        ];
    }
}
