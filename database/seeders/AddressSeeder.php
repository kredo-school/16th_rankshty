<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Address;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $addresses = [
            [
                'user_id' => 1,
                'post_code' => '123-4567',
                'receiver_name' => 'John Doe',
                'address' => "1-2-3, Example Town",
                'city' => 'Example City',
                'prefecture' => 'Example Prefecture',
                'phone_number' => '0123456789',
            ],
            [
                'user_id' => 2,
                'post_code' => '234-5678',
                'receiver_name' => 'Jane Doe',
                'address' => "4-5-6, Example Town",
                'city' => 'Example City',
                'prefecture' => 'Example Prefecture',
                'phone_number' => '9876543210',
            ],
        ];

        foreach ($addresses as $address) {
            Address::create($address);
        }
    }
}
