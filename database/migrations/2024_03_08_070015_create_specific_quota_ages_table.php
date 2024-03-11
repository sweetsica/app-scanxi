<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Bảng thông số theo giới tính, độ tuổi
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specific_quota_ages', function (Blueprint $table) {
            $table->id();
            $table->integer('age')->nullable();
            $table->boolean('sex')->nullable();
            $table->integer('height')->nullable();
            $table->integer('weight')->nullable();
            $table->string('rate')->nullable();
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
        Schema::dropIfExists('specific_quota_ages');
    }
};
