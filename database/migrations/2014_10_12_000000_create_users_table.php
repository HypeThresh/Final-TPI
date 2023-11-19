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
            $table->id('id_user');
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('age');
            $table->string('gender');
            $table->text('password');
            $table->string('country');
            $table->string('main_addr');
            $table->string('shipping_addr');
            $table->boolean('rol')->default(false);
            $table->boolean('first_purchase')->default(false);
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
