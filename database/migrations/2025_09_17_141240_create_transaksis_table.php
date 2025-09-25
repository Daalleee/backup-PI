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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string('id_transaksi')->primary();
            $table->string('id_pelanggan');
            $table->string('id_unit_game_aksesoris')->nullable();
            $table->integer('durasi');
            $table->double('biaya');
            $table->dateTime('waktu_pengembalian')->nullable();
            $table->string('status')->default('Sedang Disewa');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
