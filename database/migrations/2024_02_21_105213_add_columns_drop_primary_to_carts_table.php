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
        Schema::table('carts', function (Blueprint $table) {
            $table->dropForeign('carts_buyer_id_foreign');
            $table->dropPrimary(['buyer_id']);

            $table->dropForeign('carts_product_id_foreign');
            $table->dropColumn('product_id');
        });

        Schema::table('carts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_detail_id')->after('buyer_id');
            $table->unsignedBigInteger('quantity')->after('product_detail_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('buyer_id')->references('id')->on('users')->OnDelete('cascade');
            $table->foreign('product_detail_id')->references('id')->on('product_details')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropForeign('carts_product_detail_id_foreign');
            $table->dropColumn('product_detail_id');
            $table->dropColumn('quantity');
            $table->dropTimestamps();
            $table->dropSoftDeletes();

            $table->unsignedBigInteger('product_id')->after('buyer_id');

            $table->dropForeign('carts_buyer_id_foreign');
            $table->primary(['buyer_id','product_id']);

            $table->foreign('buyer_id')->references('id')->on('users')->OnDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->OnDelete('cascade');
        });
    }
};
