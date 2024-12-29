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
        Schema::create('doctor_sick_medicals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->comment('Bác sĩ');
            $table->bigInteger('sick_id')->comment('Bệnh');
            $table->dateTime('examination_date')->comment('Ngày khám');
            $table->bigInteger('medical_record_id')->comment('tên phòng xét nghiệm');
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
        Schema::dropIfExists('doctor_sick_medicals');
    }
};
