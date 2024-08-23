<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_pedido' => fake()->sentence(3), // Genera un título con 3 palabras
            'descripcion' => fake()->paragraph, // Genera un párrafo de descripción
            'precio' => fake()->randomFloat(2, 10, 1000), // Genera un precio flotante entre 10 y 1000 con 2 decimales'
            'id_usuario' => fake()->numberBetween(1, 10), // Genera un ID de usuario entre 1 y 100
            'id_cliente' => fake()->numberBetween(1, 15), // Genera un ID de cliente entre 1 y 100
        ];
    }
}
