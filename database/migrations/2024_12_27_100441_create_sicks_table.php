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
        Schema::create('sicks', function (Blueprint $table) {
            $table->id();
            $table->string('code')->comment('mã bệnh');
            $table->string('name')->comment('tên bệnh');
            $table->string('treatment_direction')->comment('Hướng điều trị');
            $table->bigIncrements('created_by')->comment('người tạo');
            $table->string('note')->nullable()->comment('ghi chú');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sicks');
    }
};
