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
        Schema::create('unit_p_s', function (Blueprint $table) {
            $table->string('id_unit')->primary();
            $table->string('nomor_seri')->unique();
            $table->string('tipe_ps');
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
        Schema::dropIfExists('unit_p_s');
    }
};
