<?php

use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\ProductDetailController;
use App\Http\Controllers\Frontend\ProductListController;
use App\Http\Controllers\Frontend\ProfileController;
use App\Http\Controllers\Frontend\OrdersController;
use App\Http\Controllers\Frontend\WishListsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('about',[AboutController::class,'index'])->name('about');
Route::get('productlist/{category}', [ProductListController::class, 'index'])->name('productlist');
Route::get('productdetail',[ProductDetailController::class,'index'])->name('productdetail');
Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');
Route::post('addToCart',[CheckoutController::class,'addToCart'])->name('addToCart');
Route::post('addToWishList',[WishListsController::class,'addToWishList'])->name('addToWishList');
Route::get('deleteFromCart/{id}',[CheckoutController::class,'deleteFromCart'])->name('deleteFromCart');
Route::get('deleteFromWishlist/{id}',[ProfileController::class,'deleteFromWishlist'])->name('deleteFromWishlist');
Route::post('procced_checkout',[OrdersController::class,'procced_checkout'])->name('proccedcheckout');
Route::get('getOrderDetails/{id}', [OrdersController::class, 'getOrderDetails'])->name('getOrderDetails');
Route::get('profile',[ProfileController::class,'index'])->name('profile');
Route::post('profile/{id}',[ProfileController::class,'update'])->name('profile_update');
Route::get('faq',[FaqController::class,'index'])->name('faq');
Route::get('cart',[CartController::class,'index'])->name('cart');
Route::get('login/register',[AuthController::class,'index'])->name('login_register');
Route::post('post-login',[AuthController::class,'postLogin'])->name('post_login');
Route::post('post-register',[AuthController::class,'postRegistration'])->name('post_register');
Route::get('logout',[AuthController::class,'logout'])->name('logout');