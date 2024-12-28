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
        Schema::create('training_processes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('school');
            $table->string('train');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('training_processes');
    }
};
