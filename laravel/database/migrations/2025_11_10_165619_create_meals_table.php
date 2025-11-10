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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
        
            // --- İLİŞKİ SÜTUNU ---
            // 'customer_id' adında bir sütun oluşturur.
            // 'customers' tablosundaki 'id' sütununa bağlanır.
            $table->foreignId('customer_id')
                  ->constrained('customers') // customers tablosuna bağla
                  ->cascadeOnDelete(); // Eğer Customer silinirse, bu Meal da silinsin.

            $table->string('type'); // İstediğin özellik: 'Kahvaltı', 'Öğle Yemeği' vb.
            $table->dateTime('eaten_at')->useCurrent(); // İstediğin özellik: Ne zaman yendiği
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
