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

        use HasFactory;

    public function details()
    {
        return $this->hasOne (ProductDetail::class);
    }

    public function categories()
    {
         // ピボットが main_category_id を持つ前提でキー名を明示
        return $this->belongsToMany(\App\Models\Category::class, 'category_product', 'product_id', 'main_category_id')
                    ->withTimestamps();
    }

    protected $casts = 
    [
        'status'         => \App\Enums\ProductStatus::class,//←Enumキャスト
        'stock_quantity' => 'integer',
        'unit_price'     => 'decimal:2',//金額を小数2桁で扱う場合
    ];

    protected $fillable =
    [
        'status', 
        'seller_id',
        'product_name',
        'description',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
    ];
}
