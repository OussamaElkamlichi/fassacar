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
            $table->foreignId('car_id')->constrained('cars', 'car_id');
            $table->foreignId('feature_id')->constrained('car_features', 'feature_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_features_mapping');
    }
};
