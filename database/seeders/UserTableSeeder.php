<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTime = Carbon::now();

        $users = [
            [
                'name' => 'Jonh Gall Gabayno',
                'access_id' => 1,
                "email" => 'jonh@example.com',
                'password' => 'admin',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString(),
            ],
            [
                'name' => 'Jinwoo Sung',
                'access_id' => 2,
                "email" => 'jinwoo@example.com',
                'password' => 'employee',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString(),
            ],
            [
                'name' => 'Jinha Sung',
                'access_id' => 3,
                "email" => 'jinha@example.com',
                'password' => 'client',
                'created_at' => $currentTime->toDateTimeString(),
                'updated_at' => $currentTime->toDateTimeString(),
            ]
        ];


        foreach($users as $user) {
            User::create([
                'name' => $user['name'],
                'access_id' => $user['access_id'],
                'email' => $user['email'],
                'password' => $user['password'],
                'created_at' => $user['created_at'],
                'updated_at' => $user['updated_at'],
            ]);
        }
    }
}
