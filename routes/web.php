<?php
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FaqController;
use App\Http\Controllers\Frontend\ProductDetailController;
use App\Http\Controllers\Frontend\ProductListController;
use App\Http\Controllers\Frontend\ProfileController;
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
Route::get('/',[HomeController::class,'index']);
Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::get('about',[AboutController::class,'index'])->name('about');
Route::get('productlist',[ProductListController::class,'index'])->name('productlist');
Route::get('productdetail',[ProductDetailController::class,'index'])->name('productdetail');
Route::get('checkout',[CheckoutController::class,'index'])->name('checkout');
Route::get('profile',[ProfileController::class,'index'])->name('profile');
Route::get('faq',[FaqController::class,'index'])->name('faq');
Route::get('cart',[CartController::class,'index'])->name('cart');