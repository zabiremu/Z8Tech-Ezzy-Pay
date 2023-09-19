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
        Schema::create('ezzy_rewards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('ezzyMember')->default(0);
            $table->integer('ezzLeader')->default(0);
            $table->integer('ezzyManger')->default(0);
            $table->integer('ezzyexc')->default(0);
            $table->integer('ezzyDrec')->default(0);
            $table->integer('coe')->default(0);
            $table->integer('ceo')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ezzy_rewards');
    }
};
