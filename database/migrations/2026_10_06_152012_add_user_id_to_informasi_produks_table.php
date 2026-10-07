<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::table('informasi_produks', function (Blueprint $table) {
        // Menambahkan kolom user_id yang terhubung ke tabel users
        $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade')->after('id');
    });
}

public function down(): void
{
    Schema::table('informasi_produks', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    });
}
};
