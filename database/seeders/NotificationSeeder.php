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
        // All users
        $all_users = \DB::table('users')->get();
        // admin user
        $admin_user = \DB::table('users')->where('role_id', 1)->first();
        // user
        $user = \DB::table('users')->where('role_id', 2)->first();


        for ($i = 1; $i < 8; $i++) {
            $notification = new Notification();
            if ($i == 7) {
                $notification->user_id = $admin_user->id;
                $notification->target_user_id = $user->id;
            } else {
                $notification->user_id = $all_users[$i]->id;
                $notification->target_user_id = $all_users[$i + 1]->id;
            }
            $notification->action = ActionType::search($i);
            $notification->dms_id = $i == 1 ? 1 : null;
            $notification->order_id = $i == 2 ? 1 : null;
            $notification->product_details_id = $i == 3 ? 1 : null;
            $notification->favorites_id = $i == 4 ? 1 : null;
            $notification->follows_id = $i == 5 ? 1 : null;
            $notification->reviews_id = $i == 6 ? 1 : null;
            $notification->info_text = $i == 7 ? 'This is a test notification' : null;
            $notification->is_checked = rand(0, 1);
            $notification->deleted_at = null;
            $notification->receiver_role_id = $i == 7 ? $user->role_id : $all_users[$i + 1]->role_id;
            $notification->save();
        }
    }
}
