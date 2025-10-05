<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'room_number' => $this->faker->unique()->randomNumber(3),
            'type' => $this->faker->randomElement(['single', 'double', 'suite']),
            'price' => $this->faker->randomFloat(2, 50, 500),
            'status' => 'available',
        ];
    }
}
