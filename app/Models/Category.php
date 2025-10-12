<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //物理テーブル名をmain_categoriesに固定
    protected $table = 'main_categories';
    protected $fillable = ['name', 'image'];//←nameを使う

    public function products()
    {
        // 第3,4引数でpivotの外部キー名を明示（product_id / main_category_id）
        return $this->belongsToMany(Product::class, 'category_product', 'main_category_id', 'product_id')
                    ->withTimestamps();
    }
}
