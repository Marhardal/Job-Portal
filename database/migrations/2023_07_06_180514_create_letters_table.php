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
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('receiver_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedInteger('sender_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->date('date');
            $table->string('salutation');
            $table->string('introduction');
            $table->string('body');
            $table->string('conclusion');
            $table->string('closing_salutation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
