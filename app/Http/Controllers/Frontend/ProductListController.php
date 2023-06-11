<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ProductListController extends Controller
{
    public function index(){
        if(Auth::check()){

        return view('frontend.productlist');
    }
    return view('frontend.auth')->with('Opps! You do not have access');

}

}