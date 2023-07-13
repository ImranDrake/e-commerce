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
        Schema::create('cart_models', function (Blueprint $table) {
            $table->id();
          // $table->string('name');
          //  $table->integer('product_id');
          //  $table->integer('category_id');
            $table->timestamps();
            $table->foreignId('product_models_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_models_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_models');
    }
};
