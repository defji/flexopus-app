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
        User::create([
            "name"     => "Admin user",
            "is_admin" => true,
            "email"    => "admin@flexopus.com",
            "password" => bcrypt('fl3x1230pus!'),
        ]);
    }
}
