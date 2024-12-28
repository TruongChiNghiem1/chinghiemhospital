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
        Schema::create('test_results', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('tên phòng xét nghiệm');
            $table->bigIncrements('result')->nullable()->comment('kết quả');
            $table->bigIncrements('room_id')->nullable()->comment('id phòng');
            $table->string('room_code')->comment('mã phòng');
            $table->string('room_name')->comment('tên phòng');
            $table->bigIncrements('user_id')->nullable()->comment('bác sĩ xét nghiệm');
            $table->dateTime('lab_results_date')->nullable()->comment('ngày nhận kết quả xét nghiệm');
            $table->string('note')->comment('ghi chú');
            $table->bigInteger('created_by')->nullable()->comment('Người tạo');
            $table->bigInteger('updated_by')->nullable()->comment('Người cập nhật');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('test_results');
    }
};
