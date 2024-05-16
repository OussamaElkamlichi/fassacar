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
            $table->enum('transmission', ['manual', 'automatic']);
            $table->integer('doors');
            $table->float('mpg');
            $table->text('description');
            $table->integer('trips')->default(0);
            $table->string('make');
            $table->string('model');
            $table->year('year');
            $table->text('features')->nullable();
            $table->string('type');
            $table->string('color');
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
