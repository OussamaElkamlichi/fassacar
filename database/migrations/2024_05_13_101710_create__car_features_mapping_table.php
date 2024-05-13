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
        Schema::create('car_features_mapping', function (Blueprint $table) {
            $table->id('car_feature_relation_id');
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId('feature_id')->constrained('car_features');
            $table->timestamps();

            $table->unique(['car_id', 'feature_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_car_features_mapping');
    }
};
