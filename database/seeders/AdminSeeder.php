<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{

    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $this->user->username = 'The admin';
        $this->user->email = 'admin@gmail.com';
        $this->user->password = Hash::make('admin12345');
        $this->user->role_id = 1;
        $this->user->save();
    }
}
