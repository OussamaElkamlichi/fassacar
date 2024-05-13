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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id('reservation_id');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('car_id')->constrained('cars');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('picking_up_location');
            $table->string('returning_location')->nullable();
            $table->decimal('cost', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->enum('payment_method', ['credit_card', 'debit_card', 'cash'])->nullable();
            $table->timestamps();

            $table->index('user_id');
            $table->index('car_id');
            $table->index('coupon_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_reservations');
    }
};
