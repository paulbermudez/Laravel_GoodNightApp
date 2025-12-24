<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SleepRecord>
 */
class SleepRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sleep_start = $this->faker->dateTimeThisMonth();
        $sleep_end = $this->faker->dateTimeBetween($sleep_start, '+24 hours');
        $duration = $sleep_end->diff($sleep_start)->format('%H:%I:%S');
        return [
            'user_id' => User::factory(),
            'sleep_start' => $sleep_start,
            'sleep_end' => $sleep_end,
            'duration' => $duration,
        ];
    }
}
