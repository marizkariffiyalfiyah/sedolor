<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    if (!Schema::hasTable('website_visits')) {
        Schema::create('website_visits', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });
    }
}

    public function down(): void
    {
        Schema::dropIfExists('website_visits');
    }
};