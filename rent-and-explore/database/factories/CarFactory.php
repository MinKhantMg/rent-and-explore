<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->name,
            'description'=> $this->faker->text,
            'door'=> rand(1,4),
            'gas' => rand(92,95),
            'seat' => rand(1,5),
            'MPG' => rand(20,100),
            'price' => rand(20,100)
        ];
    }
}
