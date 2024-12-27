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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('full_name');
            $table->date('dob');
            $table->tinyInteger('gender')->default(1)->comment('1:Nam, 0:Nữ');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->integer('province');
            $table->integer('district');
            $table->integer('commune');
            $table->string('street_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
