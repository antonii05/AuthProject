<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Producto;
use App\Models\Usuario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //! Termianr
        $this->call([UserSeeder::class, /* ClientesSeeder::class, ProductosSeeder::class */]);
        Usuario::factory(10)->create();
        Cliente::factory(15)->create();
        Producto::factory(20)->create();
    }
}
