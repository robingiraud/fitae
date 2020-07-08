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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * Product routes
 */
Route::get('/nos-programmes', 'ProductController@index')->name('nos-programmes');
Route::get('/nos-programme/{slug}', 'ProductController@show')->name('products.show');

/*
 * Cart routes
 */
Route::get('/panier', 'CartController@index')->name('cart.index');
Route::post('/panier/ajouter', 'CartController@store')->name('cart.store');
Route::delete('/panier/{rowId}', 'CartController@destroy')->name('cart.destroy');

Route::get('/videpanier', function () {
    Cart::destroy();
});

/*
 * Checkout routes
 */
Route::get('/paiement', 'CheckoutController@index')->name('checkout.index');
Route::post('/paiement', 'CheckoutController@store')->name('checkout.store');
