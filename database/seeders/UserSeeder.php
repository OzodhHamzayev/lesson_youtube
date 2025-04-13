<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::query()->create([
            'login' => 'admin',
            'name' => 'admin',
            'remember_token' => Str::random(10),
            'role' => fake()->numberBetween(0, 2, ),
            'password' => bcrypt('password'),
            'phone' => 974672227,

        ]);


        User::factory(10)->create();
    }
}