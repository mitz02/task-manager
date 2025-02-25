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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->string('fname');
            $table->string('lname');
            $table->text('engagement_rate');
            $table->string('phone');
            $table->string('email')->unique();
            $table->integer('is_admin')->default(0);
            $table->string('referral_code')->nullable()->uniqid();
            $table->string('referred_by')->nullable();
            $table->string('state');
            $table->string('img')->nullable(); // Make profile_image nullable
            $table->string('gender');
            $table->string('user_type');
            $table->boolean('validated')->default(0);
            $table->integer('amountspent')->default(0);
            $table->integer('balance')->default(0);
            $table->integer('pendingbalance')->default(0);
            $table->integer('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('step')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
