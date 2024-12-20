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
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('subdomain')->unique();
            $table->string('key')->unique()->nullable();
            $table->foreignId('owner_id')->constrained('users');
            $table->foreignId('template_id')->constrained('templates');
            $table->integer('commission_rate')->nullable();
            $table->boolean('pay_full_commission')->default(false);
            $table->boolean('is_verified')->default(false);
            $table->text('description')->nullable();
            $table->timestamps();

            $table->index(['slug', 'subdomain']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shops');
    }
};
