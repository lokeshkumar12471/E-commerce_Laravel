<?php

namespace App\Http\Controllers\Frontend;

use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\ProductSize;

class HomeController extends Controller
{
public function index(){
    if(Auth::check()){
        $categoryId = ProductSize::get()->unique();

    return view('frontend.home',compact('categoryId'));
}

return redirect()->route('login_register')->with('error','Opps! You do not have access, Until Login');
}
}