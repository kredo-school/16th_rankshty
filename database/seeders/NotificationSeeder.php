<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;
use App\Enums\ActionType;

class NotificationSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $notifications = [
            [
                'user_id' => 1,
                'target_user_id' => 2,
                'action' => ActionType::search(0),
                'dms_id' => null,
                'order_id' => null,
                'product_details_id' => null,
                'favorites_id' => null,
                'follows_id' => 1,
                'reviews_id' => null,
                'info_text' => 'You have a new follower',
                'is_checked' => 0,
                'deleted_at' => null,
                'receiver_role_id' => 2,
            ],
            [
                'user_id' => 1,
                'target_user_id' => 2,
                'action' => ActionType::search(1),
                'dms_id' => null,
                'order_id' => null,
                'product_details_id' => null,
                'favorites_id' => null,
                'follows_id' => 2,
                'reviews_id' => null,
                'info_text' => 'You have a new follower',
                'is_checked' => 0,
                'deleted_at' => null,
                'receiver_role_id' => 2,
            ],
            [
                'user_id' => 1,
                'target_user_id' => 2,
                'action' => ActionType::search(3),
                'dms_id' => null,
                'order_id' => null,
                'product_details_id' => null,
                'favorites_id' => null,
                'follows_id' => 1,
                'reviews_id' => null,
                'info_text' => 'You have a new follower',
                'is_checked' => 0,
                'deleted_at' => null,
                'receiver_role_id' => 2,
            ],
            [
                'user_id' => 1,
                'target_user_id' => 2,
                'action' => ActionType::search(4),
                'dms_id' => null,
                'order_id' => null,
                'product_details_id' => null,
                'favorites_id' => null,
                'follows_id' => 2,
                'reviews_id' => null,
                'info_text' => 'You have a new follower',
                'is_checked' => 0,
                'deleted_at' => null,
                'receiver_role_id' => 2,
            ]
        ];

        foreach ($notifications as $notification) {
            Notification::create($notification);
        }
    }
}
