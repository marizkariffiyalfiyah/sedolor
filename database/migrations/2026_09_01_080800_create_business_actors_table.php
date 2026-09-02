<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('business_actors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nama_usaha');
            $table->enum('jenis_usaha', ['perorangan', 'badan_usaha']);
            $table->string('nomor_induk_berusaha')->nullable();
            $table->string('npwp')->nullable();
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('no_telepon');
            $table->string('email_usaha')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('business_actors');
    }
};
