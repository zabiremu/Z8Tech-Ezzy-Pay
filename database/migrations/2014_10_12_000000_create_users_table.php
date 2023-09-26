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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('t_pin')->nullable();
            $table->string('sponsor')->nullable();
            $table->string('rank')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('nid1')->nullable();
            $table->string('nid2')->nullable();
            $table->tinyInteger('nid_verified')->default('0');
            $table->string('bank')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('is_admin')->default(0);
            $table->integer('is_users')->default(1);
            $table->integer('is_approved')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
