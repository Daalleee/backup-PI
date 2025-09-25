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
        Schema::create('aksesoris', function (Blueprint $table) {
            $table->string('id_aksesoris')->primary();
            $table->string('jenis');
            $table->integer('jumlah');
            $table->string('kondisi');
            $table->string('status')->default('Tersedia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aksesoris');
    }
};
