<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
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
}
