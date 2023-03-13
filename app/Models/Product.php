<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
    public function productcategory()
    {
        return $this->belongsTo(ProductCategogy::class, 'product_category_id', 'id');
    }

    public function productimages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function productdetail()
    {
        return $this->hasMany(ProductDetail::class, 'product_id', 'id');
    }

    public function productcomment()
    {
        return $this->hasMany(ProductComment::class, 'product_id', 'id');
    }

    public function orderdetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id', 'id');
    }
}
