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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->string('product_sub_title');
            $table->string('author_id');
            $table->string('product_type');
            $table->integer('category_id');
            $table->text('product_image');
            $table->text('slug');
            $table->integer('product_price');
            $table->integer('product_discount_price');
            $table->tinyInteger('status')->default(1);
            $table->string('quantity');
            $table->tinyInteger('strock')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
