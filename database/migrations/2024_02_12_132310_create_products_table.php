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
            $table->unsignedTinyInteger('status');
            $table->unsignedbigInteger('seller_id');
            $table->longText('image_1')->nullable();
            $table->longText('image_2')->nullable();
            $table->longText('image_3')->nullable();
            $table->longText('image_4')->nullable();
            $table->longText('image_5')->nullable();
            $table->text('description')->nullable();
            $table->string('product_name');
            $table->timestamps();
            $table->softDeletes()->nullable();

            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
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
