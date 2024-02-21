<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ActionType;

class Notification extends Model
{
    use HasFactory;
    protected $actionType = [
        'type' => ActionType::class,
    ];
    protected $fillable = [
        'user_id',
        'target_user_id',
        'action',
        'dms_id',
        'order_id',
        'product_details_id',
        'favorites_id',
        'follows_id',
        'reviews_id',
        'info_text',
        'is_checked',
        'deleted_at',
        'receiver_role_id',
    ];
    
}
