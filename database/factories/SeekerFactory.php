<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seeker>
 */
class SeekerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'=>$this->faker->firstName(),
            'surname'=>$this->faker->lastName(),
            'gender'=>$this->faker->randomElement(['male', 'female']),
            'phone_number'=>$this->faker->phoneNumber(),
            'email'=>$this->faker->unique()->email(),
            'date_of_birth'=>$this->faker->date(),
        ];
    }
}
