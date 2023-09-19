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
        Schema::create('send_money', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('balance_type')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('user_number')->nullable();
            $table->string('send_amount')->nullable();
            $table->string('tranx_id')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('send_money');
    }
};
