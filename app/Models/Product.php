<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    #A product belongs to a user
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    // ->withTrashed()

    public function reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }

    public function category_products()
    {
        return $this->hasMany(CategoryProduct::class);
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetail::class)->latest();
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }

    public function dms()
    {
        return $this->hasMany(DMS::class)->latest();
    }

    protected $casts = [
        'status' => ProductStatus::class,
    ];

}

