<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function order_details()
    {
        return $this->hasOne(OrderDetail::class)->latestOfMany();
    }

    public function addresses()
    {
        return $this->belongsTo(Address::class)->withTrashed();
    }
    
    public function product_details()
    {
        return $this->belongsTo(ProductDetail::class)->withTrashed();
    }

}

