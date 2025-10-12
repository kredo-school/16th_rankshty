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
        Schema::create('category_product', function (Blueprint $table) {
            $table->id(); //推奨；単純主キー
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('main_category_id');

            $table->foreign('product_id')
                  ->references('id')->on('products')
                  ->onDelete('cascade');

            $table->foreign('main_category_id') 
                  ->references('id')->on('main_categories')
                  ->onDelete('cascade');
            $table->timestamps(); //←withTimestamps()用

            $table->unique(['product_id', 'main_category_id']);//重複防止
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_product');
    }
};
