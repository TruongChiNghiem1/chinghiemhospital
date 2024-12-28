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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('code')->comment('Mã');
            $table->string('name')->comment('Tên');
            $table->dateTime('installation_date')->nullable()->comment('Ngày lắp');
            $table->tinyInteger('status')->default(0)->comment('Tình trạng: 0: Chưa rõ, 1: Cũ, 2 Mới');
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
        Schema::dropIfExists('devices');
    }
};
