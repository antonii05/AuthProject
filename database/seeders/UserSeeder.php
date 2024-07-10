<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nombre' => 'Antonio Blazquez',
            'edad' => 19,
            'dni' => '70918024P',
            'email' => 'antblajim@gmail.com',
            'password' => Hash::make(env('ADMIN_PASSWORD')),
        ]);
    }
}
