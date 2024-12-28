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
        Schema::create('device_hostories', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable()->comment('Chức năng');
            $table->dateTime('maintenance_day')->nullable()->comment('Ngày lắp');
            $table->string('repairman')->nullable()->comment('Chức năng');
            $table->bigInteger('repair_unit_id')->nullable()->comment('Chức năng');
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
        Schema::dropIfExists('device_hostories');
    }
};
