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
        Schema::create('product_wishlist', function (Blueprint $table) {
            $table->unsignedBigInteger('id_wishlist');
            $table->foreign('id_wishlist')->references('id')->on('wish_list');
            $table->unsignedBigInteger('product_code');
            $table->foreign('product_code')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_wishlist');
    }
};
