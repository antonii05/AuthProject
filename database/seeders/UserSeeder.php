<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuario::create([
            'nombre' => 'Antonio José',
            'apellidos' => 'Blázquez Jiménez',
            'edad' => 19,
            'dni' => '70918024P',
            'email' => 'antblajim@gmail.com',
            'password' => Hash::make(env('ADMIN_PASSWORD')),
            'rol' => 1,
        ]);
    }
}
