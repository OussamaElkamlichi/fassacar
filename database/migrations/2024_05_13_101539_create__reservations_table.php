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
            $table->id();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('car_id');
            $table->unsignedBigInteger('coupon_id')->nullable();  // Making coupon_id nullable
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('picking_up_location');
            $table->string('returning_location')->nullable();
            $table->decimal('cost', 10, 2);
            $table->decimal('total_cost', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->enum('payment_method', ['credit_card', 'debit_card', 'cash'])->nullable();
            $table->timestamps();

            // Adding foreign key constraints
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('car_id')->references('id')->on('cars');
            $table->foreign('coupon_id')->references('id')->on('coupons');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
