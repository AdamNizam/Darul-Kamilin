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
        Schema::create('tunggakan_santris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('santri_id')->constrained('santris')->onDelete('cascade');
            $table->foreignId('kategori_tunggakan_id')->constrained('kategori_tunggakans')->onDelete('cascade');
            $table->string('tahun');
            $table->boolean('January')->default(false);
            $table->boolean('February')->default(false);
            $table->boolean('March')->default(false);
            $table->boolean('April')->default(false);
            $table->boolean('May')->default(false);
            $table->boolean('June')->default(false);
            $table->boolean('July')->default(false);
            $table->boolean('August')->default(false);
            $table->boolean('September')->default(false);
            $table->boolean('October')->default(false);
            $table->boolean('November')->default(false);
            $table->boolean('December')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tunggakan_santris');
    }
};
