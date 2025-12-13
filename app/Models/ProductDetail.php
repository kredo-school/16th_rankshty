<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    use HasFactory, SoftDeletes;

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class)->latest();
    }

        protected $table = 'product_details';

    protected $fillable =
    [
        'product_id',
        'product_size',
        'product_color',
        'unit_price',
        'stock_quantity',
        'model_number',
        'unit_cost',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
