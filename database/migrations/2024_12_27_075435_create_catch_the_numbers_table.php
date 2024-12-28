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
        Schema::create('catch_the_numbers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profile_id');
            $table->integer('numerical_order');
            $table->bigInteger('service_id')->nullable();
            $table->bigInteger('room_id')->nullable();
            $table->bigInteger('staff_id')->nullable();
            $table->tinyInteger('type')->comment('1. Số thứ tự nhận bệnh, 2. Số thứ tự phòng khám');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catch_the_numbers');
    }
};
