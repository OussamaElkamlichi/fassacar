<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Reservation;
use Illuminate\Support\Facades\Log;

class ReservationController extends Controller
{
    public function create($id)
    {
        $car = Car::findOrFail($id);
        return view('reservations.create', compact('car'));
    }

    public function store(Request $request)
    {
        // Assuming a default user ID of 1 for the moment
        $defaultUserId = 1;

        Log::info('Store method called with request data:', $request->all());

        try {
            $validatedData = $request->validate([
                'car_id' => 'nullable|exists:cars,id',
                'user_id' => 'required|exists:users,id',
                'coupon_id' => 'nullable|exists:coupons,id',
                'start_date' => 'required|date_format:Y-m-d\TH:i',
                'end_date' => 'required|date_format:Y-m-d\TH:i',
                'picking_up_location' => 'required|string|max:255',
                'returning_location' => 'required|string|max:255',
                'cost' => 'required|numeric|min:0',
                'total_cost' => 'required|numeric|min:0',
                'payment_method' => 'required|string|in:credit_card,debit_card,cash',
            ]);

            Log::info('Validation passed', $validatedData);

            $reservation = new Reservation([
                'car_id' => $request->car_id,
                'user_id' => $defaultUserId,
                'coupon_id' => $request->coupon_id,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'picking_up_location' => $request->picking_up_location,
                'returning_location' => $request->returning_location,
                'cost' => $request->cost,
                'total_cost' => $request->total_cost,
                'status' => 'pending', // Default status as 'pending'
                'payment_method' => $request->payment_method,
            ]);

            $reservation->save();

            Log::info('Reservation saved', $reservation->toArray());

            return redirect()->route('reservations.index')->with('success', 'Reservation created successfully.');
        } catch (\Exception $e) {
            Log::error('Error saving reservation:', ['exception' => $e]);
            return back()->withErrors(['error' => 'Failed to create reservation.']);
        }
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }


    public function testInsert()
{
    try {
        $reservation = new Reservation();
        $reservation->car_id = 1;
        $reservation->user_id = 1;
        $reservation->start_date = now();
        $reservation->end_date = now()->addDays(1);
        $reservation->picking_up_location = 'Test Location';
        $reservation->returning_location = 'Test Location';
        $reservation->cost = 100.00;
        $reservation->total_cost = 100.00;
        $reservation->status = 'pending';
        $reservation->payment_method = 'credit_card';

        $reservation->save();

        Log::info('Test insert successful', $reservation->toArray());

        return 'Test insert successful';
    } catch (\Exception $e) {
        Log::error('Test insert failed', ['exception' => $e]);
        return 'Test insert failed: ' . $e->getMessage();
    }
}

}
