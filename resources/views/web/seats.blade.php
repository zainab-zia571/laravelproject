@extends('layouts.web') 
@section('content')

<link rel="stylesheet" href="{{ url('CSS/seats.css') }}">
<div class="full_page">

    <div class="container text-center mt-5">
        <h2 class="info" style="padding: 50px;">Select Your Seats</h2>
        <form action="{{ route('booking.store') }}" method="POST">
            @csrf

            <!-- Save booking details in session -->
            @php
                session([
                    'movie_id' => request('movie_id'),
                    'booking_date' => request('booking_date'),
                    'showtime' => request('showtime'),
                    'tickets' => request('tickets'),
                ]);
            @endphp

            <!-- Hidden input fields for movie, booking date, showtime, and tickets -->
            <input type="hidden" name="movie_id" value="{{ session('movie_id') }}">
            <input type="hidden" name="booking_date" value="{{ session('booking_date') }}">
            <input type="hidden" name="showtime" value="{{ session('showtime') }}">
            <input type="hidden" name="tickets" value="{{ session('tickets') }}">

            <!-- Seat Layout Section -->
            <div class="seat-layout my-4 select_seats">
                <!-- Example of seat layout with checkboxes -->
                <div class="seat">
                    <input type="checkbox" id="seat1" name="seats[]" value="1">
                    <label for="seat1">s1</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat2" name="seats[]" value="2">
                    <label for="seat2">s2</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat3" name="seats[]" value="3">
                    <label for="seat3">s3</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat4" name="seats[]" value="4">
                    <label for="seat4">s4</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat5" name="seats[]" value="5">
                    <label for="seat5">s5</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat6" name="seats[]" value="6">
                    <label for="seat6">s6</label>
                </div>
            </div>

            <!-- User Details Section -->
            <div class="mb-3 info">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3 info">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3 info">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3 info">
                <label for="payment" class="form-label">Payment Method</label>
                <select class="form-select" id="payment" name="payment" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="PayPal">PayPal</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Confirm Booking</button>
        </form>
    </div>
</div>

@endsection
