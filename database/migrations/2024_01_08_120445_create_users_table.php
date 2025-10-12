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
        // users: role_id（FK, not null, default 3=buyer などでもOK）
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->longText('avatar')->nullable();
            $table->string('introduction')->nullable();
            $table->string('business_name')->nullable();
            $table->string('credit_card_number')->nullable();
            $table->foreignId('role_id')
                  ->constrained('roles')   // roles.id を参照
                  ->onDelete('cascade');   // 役割削除時の挙動（任意）
            $table->timestamp('last_login_at')->nullable();
            $table->timestamp('last_logout_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
