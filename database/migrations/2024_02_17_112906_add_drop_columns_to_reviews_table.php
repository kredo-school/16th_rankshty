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
        Schema::table('reviews', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->unsignedBigInteger('product_id')->after('user_id');
            $table->text('review_title')->after('product_id');
            $table->text('description')->after('review_title');
            $table->integer('rating_star_mark')->after('description');
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->OnDelete('cascade');
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('password');
            $table->dropColumn('email');
            $table->dropColumn('avatar');
            $table->dropColumn('introduction');
            $table->dropColumn('business_name');
            $table->dropColumn('address');
            $table->dropColumn('credit_card_number');
            $table->dropColumn('role_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reviews', function (Blueprint $table) {
            $table->string('username')->after('id');
            $table->string('first_name')->after('username');
            $table->string('last_name')->after('first_name');
            $table->string('password')->after('last_name');
            $table->string('email')->after('password');
            $table->longtext('avatar')->after('email');
            $table->string('introduction')->after('avatar');
            $table->string('business_name')->after('introduction');
            $table->string('address')->after('business_name');
            $table->string('credit_card_number')->after('address');
            $table->unsignedBigInteger('role_id')->after('credit_card_number');
        });
        Schema::table('reviews', function (Blueprint $table) {
            $table->dropForeign('reviews_user_id_foreign');
            $table->dropForeign('reviews_product_id_foreign');
            $table->dropColumn('user_id');
            $table->dropColumn('product_id');
            $table->dropColumn('review_title');
            $table->dropColumn('description');
            $table->dropColumn('rating_star_mark');
            $table->dropSoftDeletes();
        });
    }
};
