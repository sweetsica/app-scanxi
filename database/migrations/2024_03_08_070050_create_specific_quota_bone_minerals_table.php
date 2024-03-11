<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Bảng thông số Chất lượng xương BQI (Bone Quality Index)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specific_quota_bone_minerals', function (Blueprint $table) {
            $table->id();
            $table->integer('age_min')->nullable();
            $table->integer('age_max')->nullable();
            $table->integer('percent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specific_quota_bone_minerals');
    }
};
