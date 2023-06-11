<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
public function index(){
    if(Auth::check()){
    return view('frontend.home');
}
return view('frontend.auth')->with('Opps! You do not have access');

}
}