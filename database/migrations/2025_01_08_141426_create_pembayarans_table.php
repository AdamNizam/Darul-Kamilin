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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tanggal_pembayaran');
            $table->string('bukti_pembayaran');
            $table->string('metode_pembayaran');
            $table->string('bulan');
            $table->string('nama');
            $table->integer('status')->default(0);
            $table->unsignedBigInteger('tunggakan_santri_id');
            $table->foreign('tunggakan_santri_id')->references('id')->on('tunggakan_santris')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
