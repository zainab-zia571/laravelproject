@extends('layouts.web')

@section('content')

<link rel="stylesheet" href="{{ url('CSS/booking.css') }}">
<div class="full_page">
    <div class="container text-center mt-5 ticket">
        <h2>Book Your Movie Tickets</h2>
        <hr>
        <div class="row">
        @if ($movies->isEmpty())
            <p class="text-center">No movies available at the moment. Please check back later.</p>
        @else
            @foreach ($movies as $movie)
                <div class="col-md-6 col-12 mb-4">
                    <div class="card movie-card">
                        <img src="{{ asset('storage/' . $movie->poster) }}" class="card-img-top" alt="{{ $movie->title }}" width="100" height="300">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p>Screening until: {{ $movie->screening_until }}</p>
                            
                            <!-- Movie Booking Form -->
                            <form action="{{ route('seats') }}" method="GET">
                                @csrf
                                <div class="form-group">
                                    <!-- Date Picker -->
                                    <label for="booking_date">Select Date</label>
                                    <input type="date" name="booking_date" id="booking_date" class="form-control" 
                                        min="{{ date('Y-m-d') }}" 
                                        max="{{ $movie->screening_until }}" required>
                                </div>
                                <div class="form-group">
                                    <!-- Time Picker -->
                                    <label for="showtime">Select Showtime</label>
                                    <select name="showtime" id="showtime" class="form-control" required>
                                        @foreach (json_decode($movie->showtimes) as $showtime)
                                            <option value="{{ $showtime }}">{{ $showtime }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <!-- Number of Tickets -->
                                    <label for="tickets">Number of Tickets</label>
                                    <input type="number" name="tickets" id="tickets" class="form-control" 
                                        min="1" 
                                        max="{{ $movie->tickets }}" required>
                                      
                                </div>

                                <!-- Hidden movie ID to pass -->
                                <input type="hidden" name="movie_id" value="{{ $movie->id }}">

                                <button type="submit" class="btn btn-primary mt-3">Proceed to Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        </div>
    </div>
</div>

@endsection
