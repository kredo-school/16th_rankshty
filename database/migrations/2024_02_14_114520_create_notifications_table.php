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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('target_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('action', ['dms', 'Favorite','Order','Shipped','Review','Restocked','Information']);
            $table->foreignId('dms_id')->references('id')->on('dms')->onDelete('cascade')->nullable();
            $table->foreignId('order_id')->references('id')->on('orders')->onDelete('cascade')->nullable();
            $table->foreignId('product_details_id')->references('id')->on('product_details')->onDelete('cascade')->nullable();
            $table->foreignId('favorites_id')->references('id')->on('favorites')->onDelete('cascade')->nullable();
            $table->foreignId('follows_id')->references('id')->on('follows')->onDelete('cascade')->nullable();
            $table->foreignId('reviews_id')->references('id')->on('reviews')->onDelete('cascade')->nullable();
            $table->text('info_text')->nullable();
            $table->boolean('is_checked')->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('receiver_role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
