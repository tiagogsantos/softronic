<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {
    Route::post('login', 'TokenController@generateToken');

    Route::group(['middleware' => 'api-auth'], function () {
        Route::group(['prefix' => 'product', 'as' => 'product.'], function () {
            Route::get('', 'ProductController@index');
            Route::post('', 'ProductController@store');
            Route::get('{id}', 'ProductController@show');
            Route::put('{id}', 'ProductController@update');
            Route::delete('{id}', 'ProductController@delete');

            Route::get('{id}/category', 'ProductController@getCategory');
            Route::post('{id}/category', 'ProductController@setCategory');

            Route::get('{id}/feature', 'ProductController@getFeature');
            Route::post('{id}/feature', 'ProductController@setFeature');

            Route::get('{id}/image', 'ProductImageController@index');
            Route::post('{id}/image', 'ProductImageController@store');
            Route::delete('{id}/image/', 'ProductImageController@deleteAll');
            Route::delete('{id}/image/{imageId}', 'ProductImageController@delete');
        });
        Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
            Route::get('', 'CategoryController@index');
            Route::post('', 'CategoryController@store');
            Route::get('{id}', 'CategoryController@show');
            Route::put('{id}', 'CategoryController@update');
            Route::delete('{id}', 'CategoryController@delete');
        });
        Route::group(['prefix' => 'feature', 'as' => 'feature.'], function () {
            Route::get('', 'FeatureController@index');
            Route::post('', 'FeatureController@store');
            Route::get('{id}', 'FeatureController@show');
            Route::put('{id}', 'FeatureController@update');
            Route::delete('{id}', 'FeatureController@delete');
        });
        Route::group(['prefix' => 'company', 'as' => 'company.'], function () {
            Route::post('', 'CompanyController@store');
            Route::get('{id}', 'CompanyController@show');
            Route::put('{id}', 'CompanyController@update');
            Route::delete('{id}', 'CompanyController@delete');
        });
        Route::group(['prefix' => 'budget', 'as' => 'budget.'], function () {
            Route::get('', 'BudgetController@index');
        });
    });
    Route::get('company/', 'CompanyController@index')->name('company.index');
    Route::get('company/{company}/category', 'CompanyController@getCategories')->name('company.categories');
    Route::get('company/{company}/category/{category}/subcategory', 'CompanyController@getSubCategories')->name('company.subcategories');
});
