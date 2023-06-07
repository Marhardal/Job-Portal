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
        Schema::create('duties_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('duty_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('experience_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dutyexperiences');
    }
};
