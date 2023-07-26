<?php

namespace App\Http\Controllers\Frontend;

use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\OrderList;
use App\Models\Checkout;


class ProfileController extends Controller
{
    public function index(){
         $userID = Session::get('id');
        if(Auth::check()){
        $userdetails=User::where('id',$userID)->get();
         $orderdetails=OrderList::get();
          $checkoutdetails=Checkout::get();
          $wishlist=WishList::get();
        return view('frontend.profile',compact('userdetails','orderdetails','checkoutdetails','wishlist'));
    }
    return redirect()->route('login_register')->with('error','Opps! You do not have access, Until Login');
}


    public function update(Request $request,$id){
      $userupdate=User::find($id);
      $userupdate->name=$request->name;
      $userupdate->number=$request->number;
      $userupdate->email=$request->email;
      $userupdate->update();
    return redirect()->route('profile')->with('success','Data Was successfully Updated');
    }
    public function deleteFromWishlist($id){
     $delete=WishList::find($id);
     $delete->delete();
     return redirect()->route('profile')->with('success','Product Was successfully Removed');
    }

}