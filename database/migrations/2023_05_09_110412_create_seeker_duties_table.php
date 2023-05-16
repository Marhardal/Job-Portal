<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seeker_duties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('job_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('duty_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('experience_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant__job__duties');
    }
};
