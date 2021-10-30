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
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/products', function () {
    return view('products', [
        'title' => 'Products'
    ]);
});

Route::get('/cart', function () {
    return view('cart' , [
        'title' => 'Cart'
    ]); 
});

Route::get('/checkout', function () {
    return view('checkout', [
        'title' => 'CheckOut'
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories'
    ]);
});

Route::get('/summary', function () {
    return view('summary', [
        'title' => 'Summary'
    ]);
});

Route::get('/register', function () {
    return view('register.register', [
        'title' => 'register'
    ]);
});

Route::get('/login', function () {
    return view('login.login', [
        'title' => 'login'
    ]);
});

// Route::get('/login', 'LoginController@validation')->name('vlLogin');
// Route::post('/login', 'LoginController@validation')->name('vlLogin');
// Route::get('/', 'UserController@index')->name('home');
// Route::get('/produk', 'UserController@index')->name('produk');
// Route::get('/cart', 'UserController@index')->name('cart');
// Route::get('/checkout', 'UserController@index')->name('checkout');
// Route::get('sumary', 'UserController@index')->name('sumary');
