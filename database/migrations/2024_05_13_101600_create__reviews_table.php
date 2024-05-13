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
        Schema::create('reviews', function (Blueprint $table) {
       
        $table->id('review_id');
        $table->foreignId('user_id')->constrained('users');
        $table->foreignId('car_id')->constrained('cars');
        $table->unsignedTinyInteger('rating');
        $table->text('comment')->nullable();
        $table->dateTime('review_date');
        $table->timestamps();

        $table->index('user_id');
        $table->index('car_id');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_reviews');
    }
};
