<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // Bảng thông số Mật độ khoáng xương BMD (Bone Mineral Density)
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('specific_quota_bones', function (Blueprint $table) {
            $table->id();
            $table->string('bm_min')->nullable();
            $table->string('bm_max')->nullable();
            $table->string('bm_type')->nullable();
            $table->boolean('fracture_history')->nullable();
            $table->string('bm_result')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specific_quota_bones');
    }
};
