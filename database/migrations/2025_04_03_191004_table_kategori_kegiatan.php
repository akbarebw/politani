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
        Schema::create('kategori_kegiatan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('id_kategori_kegiatan')->unique();
            $table->longText('nama_kategori_kegiatan');
            $table->timestamps();
            $table->index('id_kategori_kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_kegiatan');
    }
};
