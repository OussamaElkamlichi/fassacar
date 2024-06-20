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

           $table->id(); // Corrected the primary key definition
            $table->integer('seats');
            $table->enum('transmission', ['automatic', 'manual']);
            $table->integer('doors');
            $table->enum('fuel',['petrol','gasual']);
            $table->text('description');
            $table->string('model');
            $table->string('body_type');
            $table->year('year');
            $table->string('type');
            $table->string('color');
            $table->integer('luggage');
            $table->boolean('available')->default(true);
            $table->bigInteger('price');
            $table->string('image');

            $table->timestamps();
        });
    }

  
  public function down(): void{Schema::dropIfExists('cars');}
};