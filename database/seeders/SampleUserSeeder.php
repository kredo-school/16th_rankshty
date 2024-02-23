<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SampleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'The admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin12345'),
                'role_id' => 1,
            ],
            [
                'username' => 'The buyer',
                'email' => 'buyer@gmail.com',
                'password' => Hash::make('buyer12345'),
                'role_id' => 2,
            ],
            [
                'username' => 'The seller',
                'email' => 'seller@gmail.com',
                'password' => Hash::make('seller12345'),
                'role_id' => 3,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);

        }
    }
}

