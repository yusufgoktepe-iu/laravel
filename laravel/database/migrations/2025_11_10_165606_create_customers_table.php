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
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Otomatik artan 'id' (Primary Key)
            $table->string('name'); // İstediğin özellik: İsim
            $table->string('email')->unique(); // İstediğin özellik: E-posta (benzersiz)
            $table->string('password');
            $table->date('birth_date')->nullable(); // İstediğin özellik: Doğum tarihi (boş olabilir)
            $table->timestamps(); // 'created_at' ve 'updated_at' sütunları
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
