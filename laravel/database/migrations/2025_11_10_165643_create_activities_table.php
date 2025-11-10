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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            // --- İLİŞKİ SÜTUNU ---
            $table->foreignId('customer_id')
              ->constrained('customers') // customers tablosuna bağla
              ->cascadeOnDelete(); // Eğer Customer silinirse, bu Activity de silinsin.
        
            $table->string('name'); // İstediğin özellik: 'Sabah Koşusu', 'Akşam Antrenmanı'
            $table->integer('duration_minutes'); // İstediğin özellik: Kaç dakika sürdüğü
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
