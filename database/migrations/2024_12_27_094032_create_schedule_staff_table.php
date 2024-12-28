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
        Schema::create('schedule_staff', function (Blueprint $table) {
            $table->id();
            $table->string('service_id');
            $table->text('description')->nullable();
            $table->date('workday');
            $table->tinyInteger('shift')
                ->comment('
            1. Ca 1: 00h00 - 06h00, 
            2. Ca 2: 06h00 - 12h00,
            3. Ca 3: 12h00 - 18h00, 
            4. Ca 4: 18h00 - 00h00, 
            ');
            $table->tinyInteger('type')->default(1)->comment('1. Chính quy, 2. Tăng ca');
            $table->bigInteger('room_id')->nullable();
            $table->bigInteger('user_id')->nullable();
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
        Schema::dropIfExists('schedule_staff');
    }
};
