<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ProductSize;

class ProductListController extends Controller
{
    public function index(){
         $productlist=ProductSize::get();
        if(Auth::check()){
        return view('frontend.productlist',compact('productlist'));
    }
    return redirect()->route('login_register')->with('error','Opps! You do not have access, Until Login');
}
}