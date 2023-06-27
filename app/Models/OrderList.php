<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSize;

class OrderList extends Model
{
    use HasFactory;
    protected $fillable=[
            'order_id',
            'product_id',
            'date_of_purchased',
            'status',
            'total_price'
    ];
}