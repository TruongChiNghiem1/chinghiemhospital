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
        Schema::create('user_views', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable()->comment('');
            $table->integer('province')->comment('Tỉnh');
            $table->integer('district')->comment('Huyện');
            $table->integer('commune')->comment('Xã');
            $table->string('street_name')->comment('Đường');
            $table->string('position_name')->nullable()->comment('tên chức vụ');
            $table->string('unit_name')->nullable()->comment('tên đơn vị');
            $table->string('level')->nullable()->comment('trình độ');
            $table->date('starting_date')->nullable()->comment('ngày vào làm');
            $table->date('id_card_issue_date')->nullable()->comment('ngày cấp cccd');
            $table->string('place_of_issue')->nullable()->comment('Nơi cấp');
            $table->date('contract_signing_date')->nullable()->comment('ngày ký hợp đồng lao động');
            $table->date('effective_date')->nullable()->comment('ngày hiệu lực');
            $table->date('expiration_date')->nullable()->comment('ngày kết thúc');
            $table->date('date_off')->nullable()->comment('ngày nghỉ việc');
            $table->string('marriage')->nullable()->comment('tình trạng hôn nhân');
            $table->string('training_process')->nullable()->comment('quá trình đào tạo');
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
        Schema::dropIfExists('user_views');
    }
};
