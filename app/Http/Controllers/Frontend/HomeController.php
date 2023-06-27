<?php

namespace App\Http\Controllers\Frontend;

use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\ProductCategory;



class HomeController extends Controller
{
public function index(){
    if(Auth::check()){
      $categoryId=ProductCategory::get();
    return view('frontend.home',compact('categoryId'));
}
return redirect()->route('login_register')->with('error','Opps! You do not have access, Until Login');
}
}