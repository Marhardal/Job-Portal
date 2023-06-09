<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AddressType;
use App\Models\Arrangement;
use App\Models\SeekerDuties;
use App\Models\Duties;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Job;
use App\Models\Qualification;
use App\Models\Referral;
use App\Models\Resume;
use App\Models\Seeker;
use App\Models\Skill;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // SeekerDuties::factory(5)->create();
        // Skill::factory(5)->create();
        // Referral::factory(5)->create();
        // Education::factory(5)->create();

        // Job::factory(50)->create();
        // Duties::factory(100)->create();
        // Skill::factory(30)->create();
        // Qualification::factory(20)->create();

        // Type::create([
        //     'role' => 'Seeker',
        // ]);

        // Type::create([
        //     'role' => 'Admin',
        // ]);

        // Type::create([
        //     'role' => 'recruiter',
        // ]);

        // Arrangement::create([
        //     'type' => 'Full-Time',
        // ]);

        // Arrangement::create([
        //     'type' => 'Part-Time',
        // ]);

        // Arrangement::create([
        //     'type' => 'Temporary',
        // ]);

        // Arrangement::create([
        //     'type' => 'Internship',
        // ]);

        $this->call([
            AddressTypeSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
