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
        Schema::create('yayasans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_yayasan');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email');
            $table->text('sejarah_yayasan');
            $table->text('deskripsi_yayasan');
            $table->string('logo');
            $table->string('benner');
            $table->string('thumbnail_satu');
            $table->string('thumbnail_dua');
            $table->string('thumbnail_tiga');
            $table->text('link_satu');
            $table->text('link_dua');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('yayasans');
    }
};
