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
        Schema::create('responcibilities', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('vacancy_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('job_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('duty_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responcibilities');
    }
};
