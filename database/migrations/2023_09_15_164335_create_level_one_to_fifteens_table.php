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
        Schema::create('level_one_to_fifteens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('level_1')->nullable();
            $table->unsignedBigInteger('level_2')->nullable();
            $table->unsignedBigInteger('level_3')->nullable();
            $table->unsignedBigInteger('level_4')->nullable();
            $table->unsignedBigInteger('level_5')->nullable();
            $table->unsignedBigInteger('level_6')->nullable();
            $table->unsignedBigInteger('level_7')->nullable();
            $table->unsignedBigInteger('level_8')->nullable();
            $table->unsignedBigInteger('level_9')->nullable();
            $table->unsignedBigInteger('level_10')->nullable();
            $table->unsignedBigInteger('level_11')->nullable();
            $table->unsignedBigInteger('level_12')->nullable();
            $table->unsignedBigInteger('level_13')->nullable();
            $table->unsignedBigInteger('level_14')->nullable();
            $table->unsignedBigInteger('level_15')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('level_one_to_fifteens');
    }
};
