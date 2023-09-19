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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('marquee_notice')->nullable();
            $table->string('withdraw_time_close')->nullable();
            $table->string('withdraw_time_open')->nullable();
            $table->string('minimum_deposit')->nullable();
            $table->string('minimum_transaction')->nullable();
            $table->string('minimum_exchange')->nullable();
            $table->string('trc20')->nullable();
            $table->string('n_a')->nullable();
            $table->string('transaction_charge')->nullable();
            $table->string('decimal')->nullable();
            $table->string('withdraw_charge')->nullable();
            $table->string('maximum_withdraw')->nullable();
            $table->string('minimum_withdraw')->nullable();
            $table->string('ezzy_member')->nullable();
            $table->string('ezzy_leader')->nullable();
            $table->string('manager')->nullable();
            $table->string('executive')->nullable();
            $table->string('director')->nullable();
            $table->string('COE')->nullable();
            $table->string('CEO')->nullable();
            $table->integer('registration')->nullable();
            $table->string('nogodPhoneNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
