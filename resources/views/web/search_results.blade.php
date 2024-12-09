@extends('layouts.web') <!-- Adjust to your layout file -->

@section('content')
<link rel="stylesheet" href="{{ url('CSS/search_results.css') }}">

<div class="search-results">
    <h1>Search Results for "{{ $query }}"</h1>

    @if($movies->isEmpty())
        <p> No movies found.</p>
    @else
        <ul class="movie-list">
            @foreach($movies as $movie)
                <li class="movie-item">
                    <img src="{{ asset('storage/' . $movie->poster) }}" alt="{{ $movie->title }}" />
                    <h2>{{ $movie->title }}</h2>
                    <p>Category: {{ $movie->category->name ?? 'Uncategorized' }}</p>
                    <p>Showtimes: {{ implode(', ', json_decode($movie->showtimes)) }}</p>

                    <!-- Movie Booking Form -->
                    <form action="{{ route('seats') }}" method="GET" class="booking-form">
                        @csrf
                        <div class="form-group">
                            <!-- Date Picker -->
                            <label for="booking_date_{{ $movie->id }}">Select Date</label>
                            <input type="date" name="booking_date" id="booking_date_{{ $movie->id }}" class="form-control" 
                                min="{{ date('Y-m-d') }}" 
                                max="{{ $movie->screening_until }}" required>
                        </div>
                        <div class="form-group">
                            <!-- Time Picker -->
                            <label for="showtime_{{ $movie->id }}">Select Showtime</label>
                            <select name="showtime" id="showtime_{{ $movie->id }}" class="form-control" required>
                                @foreach (json_decode($movie->showtimes) as $showtime)
                                    <option value="{{ $showtime }}">{{ $showtime }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- Number of Tickets -->
                            <label for="tickets_{{ $movie->id }}">Number of Tickets</label>
                            <input type="number" name="tickets" id="tickets_{{ $movie->id }}" class="form-control" 
                                min="1" 
                                max="{{ $movie->tickets }}" required>
                        </div>

                        <!-- Hidden movie ID to pass -->
                        <input type="hidden" name="movie_id" value="{{ $movie->id }}">

                        <button type="submit" class="btn btn-primary mt-3">Proceed to Review</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
