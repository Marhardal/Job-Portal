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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('resume_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('job_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string("start_date");
            $table->string("leave_date");
            $table->string("employer");
            $table->string("City");
            $table->string("country");
            $table->string("status")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
