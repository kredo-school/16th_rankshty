<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    public $timestamps = false;
    protected $fillable = ['blocker_id', 'blocked_id'];
}
