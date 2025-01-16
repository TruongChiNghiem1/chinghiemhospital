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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->dateTime('examination_date')->comment('ngày khám');
            $table->bigInteger('diagnosis')->nullable()->comment('chuẩn đoán');
            $table->tinyInteger('height')->nullable()->comment('chiều cao');
            $table->tinyInteger('weight')->nullable()->comment('cân nặng');
            $table->tinyInteger('waist_circumference')->nullable()->comment('vòng bụng')->nullable();
            $table->string('pulse')->nullable()->comment('mạch');
            $table->string('blood_pressure')->nullable()->comment('Huyết áp');
            $table->bigInteger('patient_id')->comment('id bệnh nhân');
            $table->date('follow_up_appointment')->nullable()->comment('lịch hẹn tái khám');
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
        Schema::dropIfExists('medical_records');
    }
};
