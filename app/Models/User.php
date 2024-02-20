<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    #To get all the products of a user
    public function products()
    {
        return $this->hasMany(Product::class)->latest();
    }

    #To get all the dms of a user
    public function dms()
    {
        return $this->hasMany(DM::class)->latest();
    }

    #To get all the reviews of a user
    public function reviews()
    {
        return $this->hasMany(Review::class)->latest();
    }

    #To get all the blocks of a user
    public function blocks()
    {
        return $this->hasMany(Block::class)->latest();
    }

    #To get all the carts of a user
    public function carts()
    {
        return $this->hasMany(Cart::class)->latest();
    }

    #To get all the favorites of a user
    public function favorites()
    {
        return $this->hasMany(Favorite::class)->latest();
    }
    
    #To get all the follows of a user
    public function follows()
    {
        return $this->hasMany(Follow::class)->latest();
    }

    #To get all the orders of a user
    public function orders()
    {
        return $this->hasMany(Order::class)->latest();
    }

}

