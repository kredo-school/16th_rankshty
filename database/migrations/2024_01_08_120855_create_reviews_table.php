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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('email');
            $table->longText('avatar');
            $table->string('introduction');
            $table->string('business_name');
            $table->string('address');
            $table->string('credit_card_number');
            $table->bigInteger('role_id');
            $table->string('picture_1'); // Use string instead of image
            $table->string('picture_2');
            $table->string('picture_3');
            $table->string('picture_4');
            $table->string('picture_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
