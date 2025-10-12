<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('roles')->upsert( 
        [
            ['role_name' => 'admin'],
            ['role_name' => 'buyer'],
            ['role_name' => 'seller'],
        ],
        ['role_name'],// 一意キー
        []            // 更新カラムなし（既存なら何もしない）
        );

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
