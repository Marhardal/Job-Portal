<?php

namespace Database\Factories;

use App\Models\Qualification;
use App\Models\Resume;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Education>
 */
class EducationFactory extends Factory
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
            'qualification_id'=>Qualification::factory(),
            'school'=>$this->faker->name(),
            'start_date'=>$this->faker->date(),
            'graduation_date'=>$this->faker->date(),
        ];
    }
}
