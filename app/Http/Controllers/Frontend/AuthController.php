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
return redirect()->route('home')->with('success','Successfully Registered!');
    }


    public function postLogin(Request $request)
    {
        $request->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        $sessionvalue = User::where('email',$request->email)->get();
        if (Auth::attempt($credentials)) {
          session(['userid' => $sessionvalue[0]->id]);
        return redirect()->route('home')->with('success','You Successfully Loggedin!');
        }
        return redirect()->route('login_register')->with('error','Oppes! You Have Entered invalid credentials');
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('login_register')->with('success','Successfully LogOut!');
    }
}