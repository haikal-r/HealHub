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
            $table->uuid('user_id')->primary();
            $table->string('username');
            $table->string('email');
            $table->string('password');
            $table->string('address');
            $table->integer('phone');
            $table->enum('role', ['buyer', 'seller']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
