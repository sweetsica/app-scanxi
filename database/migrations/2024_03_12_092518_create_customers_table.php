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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->boolean('sex')->nullable();
            $table->integer('age')->nullable();
            $table->integer('phone')->nullable();
            $table->integer('zalo')->nullable();
            $table->string('email')->nullable();
            $table->text('img')->nullable();
            $table->string('note')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->float('bmi')->nullable();
            $table->float('bqi')->nullable();
            $table->float('bmd')->nullable();
            $table->string('rate')->nullable();
            $table->integer('collector_id')->nullable();
            $table->boolean('status')->nullable();
            $table->date('join_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
