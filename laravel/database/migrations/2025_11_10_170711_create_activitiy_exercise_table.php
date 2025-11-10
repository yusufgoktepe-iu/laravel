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
        Schema::create('activity_exercise', function (Blueprint $table) {
        $table->primary(['activity_id', 'exercise_id']);

        $table->foreignId('activity_id')->constrained('activities')->cascadeOnDelete();
        $table->foreignId('exercise_id')->constrained('exercises')->cascadeOnDelete();

        // İstediğin özellikler: Bu egzersiz bu aktivitede kaç set/tekrar yapıldı?
        $table->integer('sets')->nullable(); // örn: 3 (set)
        $table->integer('reps')->nullable(); // örn: 10 (tekrar)
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activitiy_exercise');
    }
};
