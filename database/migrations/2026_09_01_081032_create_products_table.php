<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('business_actor_id')->nullable()->constrained()->nullOnDelete();
            $table->string('nomor_pengajuan')->unique()->nullable();
            $table->string('nomor_registrasi')->unique()->nullable();
            $table->string('nomor_antrean')->nullable();
            $table->string('nama_produk')->nullable();
            $table->enum('kategori_produk', ['obat', 'kosmetik', 'pangan_olahan', 'obat_tradisional', 'suplemen'])->nullable();
            $table->enum('jenis_pengajuan', ['baru', 'perpanjangan', 'variasi'])->nullable();
            $table->text('komposisi')->nullable();
            $table->string('kemasan')->nullable();
            $table->string('netto')->nullable();
            $table->string('negara_asal')->nullable();
            $table->enum('status', ['draft', 'diajukan', 'diproses', 'perlu_revisi', 'disetujui', 'ditolak'])->default('draft');
            $table->text('catatan_revisi')->nullable();
            $table->timestamp('tanggal_pengajuan')->nullable();
            $table->timestamp('tanggal_disetujui')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
