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
            $table->foreignId('target_user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->enum('action', ['dms', 'Favorite','Follow','Order','Shipped','Review','Restocked','Information']);
            $table->foreignId('dms_id')->nullable()->references('id')->on('dms')->onDelete('cascade');
            $table->foreignId('order_id')->nullable()->references('id')->on('orders')->onDelete('cascade');
            $table->foreignId('product_details_id')->nullable()->references('id')->on('product_details')->onDelete('cascade');
            $table->foreignId('favorites_id')->nullable()->references('id')->on('favorites')->onDelete('cascade');
            $table->foreignId('follows_id')->nullable()->references('id')->on('follows')->onDelete('cascade');
            $table->foreignId('reviews_id')->nullable()->references('id')->on('reviews')->onDelete('cascade');
            $table->text('info_text')->nullable();
            $table->boolean('is_checked')->default(false);
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('receiver_role_id')->nullable()->references('id')->on('roles')->onDelete('cascade');
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