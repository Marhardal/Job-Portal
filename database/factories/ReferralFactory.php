<?php

namespace Database\Factories;

use App\Models\Resume;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReferralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'resume_id'=>Resume::factory(),
            'first_name'=>$this->faker->firstName(),
            'surname'=>$this->faker->lastName(),
            'phone_number'=>$this->faker->unique()->phoneNumber(),
            'email'=>$this->faker->unique()->email(),
            'job_title'=>$this->faker->jobTitle(),
            'company_name'=>$this->faker->company(),
            'company_location'=>$this->faker->city(),
            
        ];
    }
}
