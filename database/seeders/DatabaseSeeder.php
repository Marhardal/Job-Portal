<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Seeker_Duties;
use App\Models\Duties;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Qualification;
use App\Models\Referral;
use App\Models\Resume;
use App\Models\Seeker;
use App\Models\Skill;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Seeker::factory(10)->create();
        Job::factory(10)->create();
        Duties::factory(20)->create();
        Experience::factory(10)->create();
        Qualification::factory(20)->create();
        Resume::factory(10)->create();
        Seeker_Duties::factory(10)->create();
        Skill::factory(30)->create();
        Referral::factory(30)->create();
        Education::factory(20)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
