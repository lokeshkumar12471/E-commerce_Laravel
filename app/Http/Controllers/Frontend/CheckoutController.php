<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function index(){
        if(Auth::check()){
         $checkout=Checkout::get();
          $checkcount=Checkout::count();
        return view('frontend.checkout',compact('checkout','checkcount'));
        }
        return redirect()->route('login_register')->with('error','Opps! You do not have access, Until Login');
    }

    public function addToCart(Request $request)
    {
        $prodID = $_POST['prodid'];
        $prodImage = $_POST['prodimage'];
        $prodPrice = $_POST['prodprice'];
        $prodCat = $_POST['prodcat'];
        $userID = Session::get('id');
        $prodQuantity=$_POST['prodQuantity'];
        $prodsize=$_POST['prodsize'];

    $cartItem = new Checkout();
    $cartItem->product_id = $prodID;
    $cartItem->product_image = $prodImage;
    $cartItem->product_price = $prodPrice;
    $cartItem->product_name = $prodCat;
    $cartItem->user_id = $userID;
    $cartItem->product_quantity = $prodQuantity;
    $cartItem->product_size = $prodsize;
    $cartItem->save();
    $response['status'] = 1;
    echo json_encode($response,true);
    }
    public function deleteFromCart($id)
    {
    $cartItem = Checkout::find($id);
    $cartItem->delete();
    $response['status'] = 1;
    echo json_encode($response,true);
    }
}