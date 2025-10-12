<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        // ① 画像の実保存先（書き込み先）は storage/app/public/avatars
        $dir = storage_path('app/public/avatars');
        if(!File::exists($dir))
        {
            File::makeDirectory($dir, 0755, true);
        }

        // フォールバック画像を用意（なければ空ファイルを作る）
        $fallback = $dir.'/default.png';
        if(!File::exists($fallback))
        {
            File::put($fallback, ''); // 中身は空でOK（ダミー）
        }

        foreach (range(1, 10) as $index) 
        {
            // ② 実在する roles.id からランダムで取得（なければ buyer=3 とする）
            $roleId = DB::table('roles')->inRandomOrder()->value('id') ?? 3;

            // ③ 画像ファイルを生成（戻り値はファイル名のみ）
            $filename = $this->generateRandomAvatar($faker, $dir);
            if(!filename)
            {
                $filename = 'default.png';
            }

            DB::table('users')->insert([
                'username'            => $faker->userName(),
                'first_name'          => $faker->firstName(),
                'last_name'           => $faker->lastName(),
                'password'            => Hash::make('password'), // 平文は禁止
                'email'               => $faker->unique()->safeEmail(),
                // DB には公開用パス（/storage 配下に出せる形）を保存
                'avatar'              => 'avatars/' . $filename, // 公開パス用
                'introduction'        => $faker->sentence(),
                'business_name'       => $faker->company(),
                'credit_card_number'  => $faker->creditCardNumber(), // デモ用途のみ
                'role_id'             => $roleId,
                'last_login_at'       => $faker->dateTimeThisMonth(),
                'last_logout_at'      => $faker->dateTimeThisMonth(),
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);
        }
    }

    /**
    * 画像を storage/app/public/avatars に生成し、ファイル名のみ返す
    */
    private function generateRandomAvatar($faker, string $dir): ?string
    {
       try
       {
        // 第5引数 false で「ファイル名のみ」を返す
        return $faker->image($dir, 200, 200, null, false);
       } catch (\Throwable $e){
        return null; // 失敗時は null を返す
       }
    }
}

