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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();

            // products.id (unsigned BIGINT) を参照
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->string('size', 50)->nullable();
            $table->string('color', 50)->nullable();
            $table->decimal('unit_price', 10, 2)->nullable();
            $table->decimal('unit_cost', 10, 2)->nullable();
            $table->string('model_number')->nullable();
            $table->unsignedbigInteger('stock_quantity')->nullable();
            $table->timestamps();
            $table->softDeletes(); // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
