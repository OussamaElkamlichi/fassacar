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
        Schema::create('popular_car_report', function (Blueprint $table) {
            $table->id('popular_car_id');
            $table->foreignId('car_id')->constrained('cars', 'car_id');
            $table->integer('rent_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_popular_car_report');
    }
};
