<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable=['
    category_id',
    'subcategory_id',
    'size',
    'inventory',
    'price',
    'product_images',
    'seller_name',
    'seller_contact_number',
];
public function category()
{
    return $this->belongsTo(Category::class);
}

public function subcategory()
{
    return $this->belongsTo(Subcategory::class);
}
}