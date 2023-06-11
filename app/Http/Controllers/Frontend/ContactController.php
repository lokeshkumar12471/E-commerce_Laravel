<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        if(Auth::check()){
        return view('frontend.contact');
    }
    return view('frontend.auth')->with('Opps! You do not have access');
}
}