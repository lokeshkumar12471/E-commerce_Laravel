<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class AuthController extends Controller
{
public function index(){
    if(!Auth::check()){
    return view('frontend.auth');
    }else{
        return redirect()->route('home')->with('success','You Already Login!');
    }
}

public function postRegistration(Request $request){
$request->validate([
'name'=>'required',
'number'=>'required',
'email'=>'required|email|unique:users',
'password'=>'required',
'password_confirm' => 'required|same:password',
]);
$data=new User();
$data->name=$request->name;
$data->number=$request->number;
$data->email=$request->email;
$data->password = Hash::make($request->password);
$data->status="1";
$data->save();
Auth::login($data);
return redirect()->route('home')->with('success','Successfully Registered!');
    }


    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

             // Authentication successful, store values in session
           $user = Auth::user();
            session(['email' => $user->email, 'password' => $user->password, 'id' => $user->id]);
            return redirect()->route('home')->with('success', 'You have successfully logged in!');
        }

        return redirect()->route('login_register')->with('error', 'Oops! You have entered invalid credentials.');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login_register')->with('success','Successfully LogOut!');
    }
}