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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('full_name');
            $table->date('dob');
            $table->tinyInteger('gender')->default(1)->comment('1:Nam, 0:Nữ');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->integer('province')->comment('Tỉnh');
            $table->integer('district')->comment('Huyện');
            $table->integer('commune')->comment('Xã');
            $table->string('street_name')->comment('Đường');
            $table->string('job')->nullable()->comment('nghề nghiệp');
            $table->string('image')->nullable();
            $table->string('BHYT')->nullable()->comment('bảo hiểm y tế');
            $table->text('allergy')->nullable()->comment('dị ứng');
            $table->string('medical_history')->nullable()->comment('tiền sử bệnh lý');
            $table->string('emergency_contact')->nullable()->comment('liên lạc khẩn cấp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
