<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubCategory extends Model
{
    use HasFactory;
    protected $fillable=['category_id','sub_category_name'];
    public function product_categories(){
        return $this->belongsTo(ProductCategory::class);
    }
    public function product_sizes(){
        return $this->hasMany(ProductSize::class);
    }
}