<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(){
        if(Auth::check()){
        return view('frontend.cart');
    }
    return redirect()->route('login_register')->with('error','Opps! You do not have access, Until Login');
    }
}