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
        Schema::create('product_sizes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->string('size');
            $table->integer('inventory');
            $table->decimal('price', 8, 2);
            $table->string('product_images');
            $table->string('seller_name');
            $table->string('seller_contact_number');
            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->foreign('subcategory_id')->references('id')->on('product_sub_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_sizes');
    }
};