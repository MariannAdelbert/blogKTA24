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
        User::factory(10)->create();

        User::factory()->create([
            'name' => env('DEFAULT_USER_NAME', 'User McMann'),
            'email' => env('DEFAULT_USER_email', 'McMann@mann.com'),
            'password' => bcrypt (env('DEFAULT_USER_PASSWORD', 'McMann'))
        ]);
    }
}
