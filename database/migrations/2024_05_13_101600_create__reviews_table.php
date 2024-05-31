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
            $table->bigIncrements('id'); // Use bigIncrements instead of id()
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Add onDelete('cascade')
            $table->foreignId('car_id')->constrained()->onDelete('cascade'); // Add onDelete('cascade')
            $table->unsignedTinyInteger('rating');
            $table->text('comment')->nullable();
            $table->dateTime('review_date');
            $table->timestamps();

            // No need to manually create indexes, they will be created automatically for foreign keys
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews'); // Correctly drop the 'reviews' table
    }
};
