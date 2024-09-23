<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $fillable = ['size_id', 'price', 'quantity', 'product_id', 'sale', 'status'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
