<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dms extends Model
{
    use HasFactory;
    protected $fillable = ['sender_id', 'receiver_id', 'product_id', 'body', 'deleted_at'];
}
