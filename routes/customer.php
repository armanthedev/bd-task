<?php

use Illuminate\Support\Facades\Route;

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

route::get('/','App\Http\Controllers\Customer\HomeController@home')->name('home');

route::get('/privacypolicy','App\Http\Controllers\Customer\HomeController@privacyPolicy')->name('privacypolicy');

route::get('/deliverinfo','App\Http\Controllers\Customer\HomeController@deliveryInformation')->name('deliver');

route::post('/deliverinfo','App\Http\Controllers\Customer\HomeController@addDelivery')->name('deliver');

route::get('/blog','App\Http\Controllers\Customer\BlogController@blog')->name('blog');

route::get('/checkout','App\Http\Controllers\Customer\CheckoutController@checkOut')->name('checkout');

route::get('/contact','App\Http\Controllers\Customer\ContactController@contact')->name('contact');

route::post('/contact','App\Http\Controllers\Customer\ContactController@addMessages')->name('contact');

route::get('/shop','App\Http\Controllers\Customer\ShopController@shop')->name('shop');

route::get('/shoppingcart','App\Http\Controllers\Customer\ShopController@shopingCart')->name('shoppingcart');

route::post('/','App\Http\Controllers\Customer\HomeController@addSubscriber')->name('home');

route::get('/addCart/{id}','App\Http\Controllers\Customer\CartController@addCart')->name('addCart');
route::get('/removeCart/{id}','App\Http\Controllers\Customer\CartController@removeCart')->name('removeCart');







