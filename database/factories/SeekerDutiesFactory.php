<?php

namespace Database\Factories;

use App\Models\Duties;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Resume;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SeekerDutiesFactory extends Factory
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
            'job_id'=>Job::factory(),
            'experience_id'=>Experience::factory(),
            'duty_id'=>Duties::factory(),
        ];
    }
}
