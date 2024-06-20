
<div class="container">
    <h2>Reservation Details</h2>

    <p><strong>Car:</strong> {{ $reservation->car->model }}</p>
    <p><strong>Start Date:</strong> {{ $reservation->start_date }}</p>
    <p><strong>End Date:</strong> {{ $reservation->end_date }}</p>
    <p><strong>Picking Up Location:</strong> {{ $reservation->picking_up_location }}</p>
    <p><strong>Returning Location:</strong> {{ $reservation->returning_location }}</p>
    <p><strong>Cost:</strong> ${{ $reservation->cost }}</p>
    <p><strong>Total Cost:</strong> ${{ $reservation->total_cost }}</p>
    <p><strong>Payment Method:</strong> {{ $reservation->payment_method }}</p>
    <p><strong>Status:</strong> {{ $reservation->status }}</p>
</div>

