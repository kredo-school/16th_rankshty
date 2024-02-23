<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'post_code',
        'receiver_name',
        'address',
        'city',
        'prefecture',
        'phone_number',
    ];

    public function users()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }


    public function orders()
    {
        return $this->hasOne(Order::class)->latest();
    }
}