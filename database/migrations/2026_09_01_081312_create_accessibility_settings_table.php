<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accessibility_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained()->cascadeOnDelete();
            $table->unsignedTinyInteger('font_size')->default(100);
            $table->boolean('high_contrast')->default(false);
            $table->boolean('screen_reader')->default(false);
            $table->boolean('keyboard_nav')->default(false);
            $table->boolean('voice_input')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accessibility_settings');
    }
};
