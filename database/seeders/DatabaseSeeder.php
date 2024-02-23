<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call([
            RoleSeeder::class,
            UsersTableSeeder::class,
            SampleUserSeeder::class,
            AddressSeeder::class,
            ProductSeeder::class,
            ProductDetailSeeder::class,
            MainCategorySeeder::class,
            SubCategorySeeder::class,
            CategoryProductSeeder::class,
            CartSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            ReviewsTableSeeder::class,
            FavoritesTableSeeder::class,
            FollowSeeder::class,
            BlockSeeder::class,
            DmsSeeder::class,
            ComplainHandlingTableSeeder::class,
            NotificationSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
