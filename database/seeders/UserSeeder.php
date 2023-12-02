<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            "email" => "admin@example.com",
            "password" => "password",
        ]);

        $admin->assignRole("admin");

        $user = User::create([
            "email" => "user@example.com",
            "password" => "password",
        ]);

        $user->assignRole("user");
    }
}
