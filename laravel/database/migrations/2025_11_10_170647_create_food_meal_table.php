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
        Schema::create('food_meal', function (Blueprint $table) {
        // İki anahtarı birlikte "birincil anahtar" yapıyoruz.
        // Bu sayede bir öğüne aynı yiyecek birden fazla eklenemez.
        $table->primary(['food_id', 'meal_id']);

        $table->foreignId('food_id')->constrained('food')->cascadeOnDelete();
        $table->foreignId('meal_id')->constrained('meals')->cascadeOnDelete();
        
        // İstediğin özellik: Bu öğünde bu yiyecekten kaç gr/adet yendi?
        $table->integer('amount')->default(100); // örn: 100 (gram)
        
        // Pivot tablolarda genelde timestamps'e gerek duyulmaz, ama istersen ekleyebilirsin.
        // $table->timestamps(); 
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_meal');
    }
};
