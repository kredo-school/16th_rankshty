<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $table = 'category_product';
    protected $fillable = ['product_id', 'main_category_id']; //we will use the createMany(method)//request array
    public $timestamps = false;

    public function category(){
        return $this->belongsTo(MainCategory::class, 'main_category_id');
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function categories(){
        return $this->hasMany(MainCategory::class);
    }
}
