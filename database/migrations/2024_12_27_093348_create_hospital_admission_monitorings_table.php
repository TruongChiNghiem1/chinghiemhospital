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
        Schema::create('hospital_admission_monitorings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('test_date')->nullable()->comment('ngày kiểm tra');
            $table->string('test_results')->comment('Kết quả kiểm tra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospital_admission_monitorings');
    }
};
