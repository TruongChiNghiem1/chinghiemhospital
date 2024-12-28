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
        Schema::create('admission_records', function (Blueprint $table) {
            $table->id();
            $table->bigIncrements('profile_id')->comment('tên phòng xét nghiệm');
            $table->dateTime('admission_date')->comment('ngày nhập viện');
            $table->dateTime('discharge date')->nullable()->comment('Ngày ra viện');
            $table->bigIncrements('admission_reason_id')->comment('lý do nhập viện');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_records');
    }
};
