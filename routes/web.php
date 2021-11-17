<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

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

// Route Sabun
Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{product:slug}', [ProductController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);

Route::put('/product/addreview', [ProductController::class, 'addreview'])->name('addreview');
Route::post('/products/search', [ProductController::class, 'search']);

Route::resource('/profile/products', ProfileController::class)->middleware('auth');
Route::get('/profile', function () {
    return view('profiles.index');
})->middleware('auth');


Route::get('/user/{user:username}', function (User $user) {
    return view('/products', [
        'title' => "Product By : $user->username",
        'products' => $user->product->load('category', 'user')
    ]);
});


//Route::get('/checkout', function () {
//  return view('checkout', [
//      'title' => 'CheckOut'
//  ]);
//});

Route::get('/summary', function () {
    return view('summary', [
        'title' => 'Summary'
    ]);
});

// Route Fathtin
// Route::get('/register', function () {
//     return view('register.register', [
//         'title' => 'register'
//     ]);
// });

// Route::get('/login', function () {
//     return view('login.login', [
//         'title' => 'login'
//     ]);
// });

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::put('/actionregister', [RegisterController::class, 'actionregister'])->name('actionregister');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('/actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/categories/{categories:slug}', [HomeController::class, 'show'])->name('show');
// Route::get('/produk', 'UserController@index')->name('produk');
// Route::get('/cart', 'UserController@index')->name('cart');
// Route::get('/checkout', 'UserController@index')->name('checkout');
// Route::get('sumary', 'UserController@index')->name('sumary');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list')->middleware('auth');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store')->middleware('auth');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update')->middleware('auth');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove')->middleware('auth');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear')->middleware('auth');

Route::post('checkout', [CheckoutController::class, 'store'])->name('checkout.store')->middleware('auth');

Route::get('/checkout', [checkoutController::class, 'index'])->name('checkout.index')->middleware('auth');;
