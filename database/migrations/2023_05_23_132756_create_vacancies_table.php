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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('organisation_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('arrangement_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('description');
            $table->string('position');
            $table->string('location');
            $table->timestamp('deactivated_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
