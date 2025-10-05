<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
use App\Models\Guest;
use App\Models\Room;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'guest_id' => Guest::all()->random()->id,
            'room_id' => Room::all()->random()->id,
            'check_in_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'check_out_date' => $this->faker->dateTimeBetween('+1 month', '+2 months'),
        ];
    }
}
