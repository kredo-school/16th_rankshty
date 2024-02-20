<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    public function products()
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }
}
