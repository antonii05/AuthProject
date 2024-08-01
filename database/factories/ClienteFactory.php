<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    protected $provincias = [
        'Álava', 'Albacete', 'Alicante', 'Almería', 'Asturias', 'Ávila', 'Badajoz', 'Barcelona', 'Burgos', 'Cáceres', 'Cádiz', 'Cantabria', 'Castellón', 'Ciudad Real', 'Córdoba', 'Cuenca', 'Girona', 'Granada', 'Guadalajara', 'Guipúzcoa', 'Huelva', 'Huesca', 'Islas Baleares', 'Jaén', 'La Coruña', 'La Rioja', 'Las Palmas', 'León', 'Lérida', 'Lugo', 'Madrid', 'Málaga', 'Murcia', 'Navarra', 'Orense', 'Palencia', 'Pontevedra', 'Salamanca', 'Segovia', 'Sevilla', 'Soria', 'Tarragona', 'Santa Cruz de Tenerife', 'Teruel', 'Toledo', 'Valencia', 'Valladolid', 'Vizcaya', 'Zamora', 'Zaragoza'
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_fiscal' => fake()->company(),
            'email' => fake()->unique()->safeEmail(),
            'nif' => $this->generarDNI(),
            'direccion' => fake()->streetAddress(),
            'codigo_postal' => fake()->postcode(),
            'pais' => fake()->country(),
            'provincia' => fake()->randomElement($this->provincias),
            'activo' => rand(0, 1),
        ];
    }

    private function generarDNI(): string
    {
        // Generar un número aleatorio de 8 dígitos
        $numero = mt_rand(10000000, 99999999);

        // Calcular la letra de control
        $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';
        $letra = $letras[$numero % 23];

        // Concatenar el número y la letra
        $dni = $numero . $letra;

        return $dni;
    }
}
