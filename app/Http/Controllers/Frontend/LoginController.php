<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
        return view('frontend.login');
    }
    public function register(){
        return view('frontend.register');
    }
}