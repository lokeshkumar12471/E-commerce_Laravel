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
public function product_categories()
{
    return $this->belongsTo(ProductCategory::class);
}

public function product_sub_categories()
{
    return $this->belongsTo(ProductSubCategory::class, 'subcategory_id');
}
}