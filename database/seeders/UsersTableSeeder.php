<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $avatarPath = $this->generateRandomAvatar();
            
            \DB::table('users')->insert([
                'name' => $faker->name,
                'username'            => $faker->username,
                'first_name'          => $faker->first_name,
                'last_name'           => $faker->last_name,
                'password '           => $faker->password,
                'email'               => $faker->email,
                'avatar'              => $avatarPath,
                'introduction'        => $faker->introduction,
                'business_name'       => $faker->business_name,
                'credit_card_number'  => $faker->credit_card_number,
                'role_id'             => $faker->role_id,
                'last_login_at'       => $faker->last_login_at,
                'last_logout_at'      => $faker->last_logout_at,
                'created_at'          => Now(),
                'updated_at'          => now()
                
            ]);
        }
    }

    private function generateRandomAvatar()
    {
        $avatar = $faker->image('public/storage/avatars', 200, 200, 'people', false);
        return 'avatars/' . pathinfo($avatar, PATHINFO_BASENAME);
    }
}






