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
            $table->string('code');
            $table->string('full_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('dob');
            $table->tinyInteger('gender')->comment('1: nam, 2: nữ');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->integer('position_id')->nullable()->comment('id chức vụ');
            $table->integer('unit_id')->nullable()->comment('id đơn vị');
            $table->string('years_of_experience')->nullable()->comment('Thâm niên trong lĩnh vực');
            $table->tinyInteger('status')->nullable()->comment('trạng thái: 0: Nghỉ việc, 1: Đang làm, 2: Thử việc, 3: Tạm hoãn');
            $table->string('image')->nullable()->comment('ảnh');
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
