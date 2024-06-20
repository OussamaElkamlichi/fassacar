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
        
            $table->foreignId('car_id')->nullable()->constrained('cars'); // Corrected the constrained() method
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Corrected the constrained() method
            $table->foreignId('coupon_id')->nullable()->constrained()->onDelete('set null'); // Corrected the constrained() method
            $table->date('start_date');
            $table->date('end_date');
            $table->string('picking_up_location');
            $table->string('returning_location');
            $table->decimal('cost', 8, 2);
            $table->decimal('total_cost', 8, 2);
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->string('payment_method');
            $table->timestamps();

            $table->index('car_id');
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
