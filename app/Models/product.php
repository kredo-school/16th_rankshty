<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    #A product belongs to a user
    public function users()
    {
        return $this->belongsTo(User::class)->withTrashed();;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }

    public function category_product()
    {
        return $this->hasMany(CategoryProduct::class)->latest();
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class)->latest();
    }

    public function dms()
    {
        return $this->hasMany(DMS::class)->latest();
    }
}
