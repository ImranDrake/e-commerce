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
        Schema::create('price_models', function (Blueprint $table) {
            $table->id();
            // $table->string('imagepath');
            $table->integer('price_models')->constrained()->onDelete('cascade');
           // $table->integer('color_id');
            $table->foreignId('product_models_id')->constrained()->onDelete('cascade');
           // $table->integer('size_id');
            $table->foreignId('color_models_id')->constrained()->onDelete('cascade');
           // $table->foreignId('product_models_id')->constrained()->onDelete('cascade');
            $table->foreignId('size_models_id')->constrained()->onDelete('cascade');
            //$table->foreignId('user_models_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_models');
    }
};
