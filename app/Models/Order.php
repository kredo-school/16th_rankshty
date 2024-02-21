<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_id',
        'seller_id',
        'address_id',
        'freight',
        'shipped_date',
        'ordered_at',
        'ordered_date',
        'required_date',
    ];

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

