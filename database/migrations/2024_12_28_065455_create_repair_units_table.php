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
        Schema::create('repair_units', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('tên đơn vị');
            $table->string('function')->comment('Chức năng');
            $table->date('contract_date')->nullable()->comment('Ngày ký hợp đồng');
            $table->string('representative')->comment('người đại diện');
            $table->string('phone')->comment('số điện thoại');
            $table->integer('province')->comment('Tỉnh');
            $table->integer('district')->comment('Huyện');
            $table->integer('commune')->comment('Xã');
            $table->string('street_name')->comment('Đường');
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
        Schema::dropIfExists('repair_units');
    }
};
