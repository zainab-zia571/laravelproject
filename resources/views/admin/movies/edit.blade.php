@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="{{ asset('CSS/adminedit.css') }}">
<div class="container">
    <h2 class="my-4">Edit Movie</h2>

    <!-- Movie Edit Form -->
    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Movie Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
        </div>

        <div class="mb-3">
            <label for="poster" class="form-label">Movie Poster</label>
            <input type="file" class="form-control" id="poster" name="poster">
            <img src="{{ asset('storage/images' . $movie->poster) }}" width="100" class="mt-2">
        </div>

        <div class="mb-3">
            <label for="showtime" class="form-label">Showtime</label>
            <input type="time" class="form-control" id="showtime" name="showtime" value="{{ $movie->showtime }}" required>
        </div>

        <div class="mb-3">
            <label for="screening_until" class="form-label">Screening Until</label>
            <input type="date" class="form-control" id="screening_until" name="screening_until" value="{{ $movie->screening_until }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Movie</button>
    </form>

</div>
@endsection
