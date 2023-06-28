<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductSize;

class OrderList extends Model
{
    use HasFactory;
    protected $fillable=[
            'id',
            'product_id',
            'status',
            'total_price',
            'product_size'
    ];
}