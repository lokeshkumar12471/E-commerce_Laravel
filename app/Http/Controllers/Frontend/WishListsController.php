<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WishList;
use Illuminate\Support\Facades\Session;

class WishListsController extends Controller
{
    public function addToWishList(){
        $WishListprodimg=$_POST['wishListImg'];
        $WishListprodname=$_POST['wishListCat'];
        $WishListprodprice=$_POST['wishListPrice'];
        $WishListprodid=$_POST['wishListId'];
        $wishlist_userid=Session::get('id');

        $wishlist=new WishList();
        $wishlist->wishlist_image=$WishListprodimg;
        $wishlist->wishlist_productname=$WishListprodname;
        $wishlist->wishlist_productprice=$WishListprodprice;
        $wishlist->wishlist_productid=$WishListprodid;
        $wishlist->wishlist_userid=$wishlist_userid;
        $wishlist->save();
        return redirect()->route('home')->with('success','Product Added In Wishlist');
    }
}