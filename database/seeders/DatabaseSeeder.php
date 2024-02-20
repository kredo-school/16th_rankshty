<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\SubCategorySeeder;
use Database\Seeders\ProductDetailSeeder;
use Database\Seeders\CategoryProductSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UsersTableSeeder::class,
            AddressSeeder::class,
            ProductSeeder::class,
            ProductDetailSeeder::class,
            MainCategorySeeder::class,
            SubCategorySeeder::class,
            CategoryProductSeeder::class,
            ReviewsTableSeeder::class,
            FavoritesTableSeeder::class,
            CartSeeder::class,
            FollowSeeder::class,
            BlockSeeder::class,
            DmsSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
