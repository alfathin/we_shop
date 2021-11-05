<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
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

// Route::get('/', function () {
//     return view('home', [
//         'title' => 'Home'
//     ]);
// });
// Route::get('/products', function () {
//     return view('products', [
//         'title' => 'Products'
//     ]);
// });

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{product:slug}', [ProductController::class, 'show']);
Route::get('/cart', [CartController::class, 'index']);


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

// Route::get('/login', function () {
//     return view('login.login', [
//         'title' => 'login'
//     ]);
// });

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::get('/', [LoginController::class, 'home'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
// Route::get('/', 'UserController@index')->name('home');
// Route::get('/produk', 'UserController@index')->name('produk');
// Route::get('/cart', 'UserController@index')->name('cart');
// Route::get('/checkout', 'UserController@index')->name('checkout');
// Route::get('sumary', 'UserController@index')->name('sumary');
