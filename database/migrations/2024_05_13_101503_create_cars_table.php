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
        Schema::create('cars', function (Blueprint $table) {
            $table->id('car_id');
            $table->integer('seats');
            $table->enum('transmission', ['automatic', 'manual']);
            $table->integer('doors');
            $table->integer('mpg');
            $table->text('description')->nullable();
            $table->integer('trips')->default(0);
            $table->string('make');
            $table->string('model');
            $table->year('year');
            $table->text('features')->nullable();
            $table->string('type')->nullable();
            $table->string('color')->nullable();
            $table->string('license_plate')->unique();
            $table->boolean('available')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
