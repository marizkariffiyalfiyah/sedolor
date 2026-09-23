<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('informasi_produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('prioritas');
            $table->string('jenis_layanan');
            $table->date('tanggal_permintaan');
            $table->string('nomor_antrean');
            $table->string('estimasi_jam');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi_produks');
    }
};