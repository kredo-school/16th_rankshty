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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('address_id')->references('id')->on('addresses')->onDelete('cascade');
            $table->string('freight', 255);
            $table->date('shipped_date')->nullable();
            $table->date('ordered_at')->nullable();
            $table->date('order_date')->nullable();
            $table->date('required_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
