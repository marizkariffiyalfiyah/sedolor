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
        Schema::table('informasi_produks', function (Blueprint $table) {
            // Menambahkan kolom status dengan nilai default 'Menunggu Konfirmasi'
            $table->string('status')
                  ->default('Menunggu Konfirmasi')
                  ->after('estimasi_jam'); // Meletakkan kolom setelah 'estimasi_jam'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('informasi_produks', function (Blueprint $table) {
            // Hapus kolom status jika migration di-rollback
            $table->dropColumn('status');
        });
    }
};