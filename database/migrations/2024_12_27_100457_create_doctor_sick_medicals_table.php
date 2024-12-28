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
            $table->bigIncrements('staff_id')->comment('Bác sĩ');
            $table->bigIncrements('sick_id')->comment('Bệnh');
            $table->dateTime('examination_date')->comment('Ngày khám');
            $table->bigIncrements('medical_record_id')->comment('tên phòng xét nghiệm');
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