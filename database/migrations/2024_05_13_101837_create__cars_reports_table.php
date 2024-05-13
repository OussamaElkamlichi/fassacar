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
        Schema::create('car_reports', function (Blueprint $table) {
            $table->id('car_report_id');
            $table->date('date');
            $table->string('day_name_abbreviation');
            $table->string('day_name');
            $table->string('special_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_cars_reports');
    }
};
