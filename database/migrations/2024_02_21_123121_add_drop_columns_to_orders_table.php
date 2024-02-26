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
        Schema::table('orders', function (Blueprint $table) {
            $table->timestamp('ordered_date');
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('ordered_at');
            $table->dropColumn('order_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('ordered_date');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
        Schema::table('orders', function (Blueprint $table) {
            $table->timestamp('ordered_at');
            $table->timestamp('order_date');
        });
    }
};
