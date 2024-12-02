@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="{{ asset('CSS/admincreate.css') }}">
<div class="container">
    <h2 class="my-4">Add New Movie</h2>

    <!-- Movie Form -->
    <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Movie Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Movie Poster</label>
            <input type="file" class="form-control" id="poster" name="poster" required>
        </div>

        <div class="mb-3">
            <label for="showtime" class="form-label">Showtime</label>
            <input type="time" class="form-control" id="showtime" name="showtime" required>
        </div>

        <div class="mb-3">
            <label for="screening_until" class="form-label">Screening Until</label>
            <input type="date" class="form-control" id="screening_until" name="screening_until" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Movie</button>
    </form>

</div>
@endsection
