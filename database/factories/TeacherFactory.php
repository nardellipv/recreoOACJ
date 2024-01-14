<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_teacher' => fake()->firstName,
            'dni_teacher' => fake()->numberBetween($min = 10000000, $max = 99999999),
            'space' => fake()->sentence($nbWords = 3, $variableNbWords = true),
            'level_teacher' => fake()->randomElement(['1', '2']),
            'other_school' => fake()->randomElement(['SI', 'NO']),
            'name_school_teacher' => fake()->sentence($nbWords = 3, $variableNbWords = true),
            'phone_teacher' => fake()->e164PhoneNumber,
            'email_teacher' => fake()->unique()->safeEmail,
            'first_time_teacher' => fake()->randomElement(['SI', 'NO']),
            'user_id' => rand(1, 10),
        ];
    }
}
