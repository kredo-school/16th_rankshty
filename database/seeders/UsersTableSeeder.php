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
            $avatarPath = $this->generateRandomAvatar($faker);
            
            \DB::table('users')->insert([
                'username'            => $faker->userName,
                'first_name'          => $faker->firstName,
                'last_name'           => $faker->lastName,
                'password'            => $faker->password,
                'email'               => $faker->email,
                'avatar'              => $avatarPath,
                'introduction'        => $faker->sentence,
                'business_name'       => $faker->company,
                'credit_card_number'  => $faker->creditCardNumber,
                'role_id'             => $faker->randomDigitNotNull,
                'last_login_at'       => $faker->dateTimeThisMonth,
                'last_logout_at'      => $faker->dateTimeThisMonth,
                'created_at'          => now(),
                'updated_at'          => now()
            ]);
        }
    }

    private function generateRandomAvatar($faker)
    {
        $avatar = $faker->image('public/storage/avatars', 200, 200, 'people', false);
        return 'avatars/' . pathinfo($avatar, PATHINFO_BASENAME);
    }
}

