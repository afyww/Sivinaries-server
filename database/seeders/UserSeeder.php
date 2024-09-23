<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name" => "Afy",
                "email" => "afy@gmail.com",
                "password" => bcrypt("Afy123456"),
                "level" => "admin",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}