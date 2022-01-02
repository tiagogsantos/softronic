<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::get('/logout', 'AdminAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdminAuth\RegisterController@register');

    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::group(['prefix' => 'banner', 'as' => 'banner.'], function () {
        Route::get('', 'BannerController@index')->name('index');
        Route::get('create', 'BannerController@create')->name('create');
        Route::post('store', 'BannerController@store')->name('store');
        Route::get('edit/{banner}', 'BannerController@edit')->name('edit');
        Route::post('update/{banner}', 'BannerController@update')->name('update');
        Route::get('delete/{banner}', 'BannerController@delete')->name('delete');
    });
});
Route::group(['namespace' => 'Api', 'prefix' => 'api', 'as' => 'api.'], function(){
    Route::post('/cart', 'CartController@store')->name('cart.store');
    Route::post('/cart/update', 'CartController@update')->name('cart.update');
    Route::delete('/cart', 'CartController@delete')->name('cart.delete');
});

Route::group(['namespace' => 'Customer'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/pesquisar', 'SearchController@search')->name('search');
    Route::get('/produtos', 'SearchController@products')->name('products');
    Route::get('/filtro', 'SearchController@ajaxRefresh')->name('filtro');
    Route::group(['prefix' => 'pt-br'], function () {
        Route::get('/sobre-nos', 'ContentController@about')->name('about');
        Route::get('/politica-de-privacidade', 'ContentController@policy')->name('policy');
        Route::post('/newsletter', 'NewsletterController@store')->name('newsletter');
        Route::get('/seja-um-revendedor', 'PartnerController@index')->name('partner.index');
        Route::post('/seja-um-revendedor', 'PartnerController@store')->name('store');
        Route::get('/pos-venda', 'ContentController@afterSale')->name('after.sale');
        Route::get('/fale-conosco', 'ContactController@index')->name('contact');
        Route::post('/fale-conosco', 'ContactController@store')->name('contact.store');
        Route::get('produtos/{slug}', 'ProductController@index')->name('product');
        Route::get('/cadastre-se', 'RegisterController@index')->name('register.show');
        Route::post('/register', 'RegisterController@store')->name('register');
        Route::get('/login', 'LoginController@index')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login');
        Route::get('/sucesso', 'SuccessController@index')->name('success');
        Route::get('/sacola', 'BagController@index')->name('bag');
        Route::post('/sacola', 'BagController@finish')->name('bag.finish');

        Route::get('/{company}/{category?}', 'CategoryController@index')->name('company');
    });
});

// Route::group(['prefix' => 'customer'], function () {
//   Route::get('/login', 'CustomerAuth\LoginController@showLoginForm')->name('login');
//   Route::post('/login', 'CustomerAuth\LoginController@login');
//   Route::post('/logout', 'CustomerAuth\LoginController@logout')->name('logout');

//   Route::get('/register', 'CustomerAuth\RegisterController@showRegistrationForm')->name('register');
//   Route::post('/register', 'CustomerAuth\RegisterController@register');

//   Route::post('/password/email', 'CustomerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
//   Route::post('/password/reset', 'CustomerAuth\ResetPasswordController@reset')->name('password.email');
//   Route::get('/password/reset', 'CustomerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
//   Route::get('/password/reset/{token}', 'CustomerAuth\ResetPasswordController@showResetForm');
// });
