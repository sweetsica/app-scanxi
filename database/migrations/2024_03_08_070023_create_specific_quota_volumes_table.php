<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Bảng thông số chỉ số khối cơ thể BMI (Body Mass Index)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specific_quota_volumes', function (Blueprint $table) {
            $table->id();
            $table->integer('vol_min')->nullable();
            $table->integer('vol_max')->nullable();
            $table->string('result')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specific_quota_volumes');
    }
};
