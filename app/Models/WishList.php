<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $fillable=[
        'wishlist_image',
        'wishlist_productname',
         'wishlist_productprice',
            'wishlist_productid',
            'wishlist_userid'
    ];
}