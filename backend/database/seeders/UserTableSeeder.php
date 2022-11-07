<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userData = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'gender' => 'male',
                'role' => 'admin',
                'status' => 1
            ],
            [
                'name' => 'ram',
                'username' => 'ram',
                'email' => 'ram@gmail.com',
                'gender' => 'male',
                'role' => 'admin',
                'status' => 1
            ]
        ];
        foreach ($userData as $user) {
            User::create($user);
        }
    }
}
