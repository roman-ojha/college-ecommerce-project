<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'description' => fake()->text,
            'slug' => str()->slug($name),
            'quantity' => fake()->numberBetween(0, 20),
            'price' => fake()->numberBetween(10000, 1000000),
        ];
    }
}
