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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('my_wallet')->nullable();
            $table->integer('affiliate_income')->default(0);
            $table->integer('ezzy_return')->default(0);
            $table->integer('level_bonus')->default(0);
            $table->integer('ezzy_reward')->default(0);
            $table->double('ezzy_royality')->default(0);
            $table->integer('group_bonus')->default(0);
            $table->integer('bonus')->default(0);
            $table->integer('booking_wallet')->nullable();
            $table->integer('is_approved')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
