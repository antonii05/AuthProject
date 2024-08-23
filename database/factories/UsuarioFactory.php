<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'apellidos'=> fake()->lastName(),
            'edad' => rand(12,74),
            'dni' => $this->generarDNI(),
            'email' => fake()->unique()->safeEmail(),
            'password'=> Hash::make(fake()->password),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'rol' => rand(1,6),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
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



