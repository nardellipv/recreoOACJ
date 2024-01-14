<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_school' => fake()->name,
            'address' => fake()->address,
            'postal_code' => fake()->randomNumber,
            'phone_school' => fake()->e164PhoneNumber,
            'type' => fake()->randomElement(['PRIVADA', 'PUBLICA']),
            'director1' => fake()->name,
            'director2' => fake()->name,
            'email' => fake()->unique()->safeEmail,
            'first_time_school' => fake()->randomElement(['SI', 'NO']),
            'sede' => fake()->randomElement(['SI', 'NO']),
            'userType' => 'Colegio',
            'province_id' => fake()->randomElement([2, 6, 10, 14, 22, 26, 18, 30, 34, 38, 42, 46, 50, 54, 58, 62, 66, 70, 74, 78, 82, 86, 90, 94]),
            'region_id' => 6,
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
