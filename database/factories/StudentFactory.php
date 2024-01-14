<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_student' => fake()->firstName,
            'dni_student' => fake()->numberBetween($min = 10000000, $max = 99999999),
            'birth_date' => fake()->date($format = 'Y-m-d'),
            'phone_student' => fake()->e164PhoneNumber,
            'email_student' => fake()->email,
            'classroom' => fake()->randomElement(['PRIMARIA', 'SECUNDARIA']),
            'level_student' => fake()->randomElement(['1', '2']),
            'genre' => fake()->randomElement(['FEMENINO', 'MASCULINO']),
            'first_note' => fake()->numberBetween($min = 1, $max = 100),
            'second_note' => fake()->numberBetween($min = 1, $max = 100),
            'total_note' => fake()->numberBetween($min = 1, $max = 100),
            'first_note_inter' => fake()->numberBetween($min = 1, $max = 100),
            'second_note_inter' => fake()->numberBetween($min = 1, $max = 100),
            'total_note_inter' => fake()->numberBetween($min = 1, $max = 100),
            'first_time_student' => fake()->randomElement(['SI', 'NO']),
            'user_id' => rand(1, 10),
        ];
    }
}
