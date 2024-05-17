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
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->foreignId('car_id')->constrained('cars', 'car_id');
            $table->foreignId('coupon_id')->nullable()->constrained('coupons', 'coupon_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('picking_up_location');
            $table->string('returning_location'); 
            $table->decimal('cost', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'cancelled']);
            $table->enum('payment_method', ['credit_card', 'paypal', 'cash']);
            $table->timestamps();
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
